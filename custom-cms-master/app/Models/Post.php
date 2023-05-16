<?php

namespace App\Models;

use App\Models\Database;
use App\Helpers\Str;
use App\Models\User;
use App\Config;
use App\Models\FileStorage;

class Post {
    private Database $db;
    private string $id;
    private string $userId;
    private string $title;
    private string $slug;
    private string $body;
    private string $createdAt;
    private string $teaser;
    private string $link;

    public function __construct(Database $db, ?array $data = [])
    {
        $this->db = $db;
        $this->fill($data);
    }
    

    public function find(int $identifier): bool
    {
        $sql = "SELECT * FROM `posts` WHERE `id` = :identifier";
        $postQuery = $this->db->query($sql, ['identifier' => $identifier]);

        if (!$postQuery->count()) {
            return false;
        }

        $this->fill($postQuery->first());
        return true;
    }

    public function fill(array $data)
    {
        foreach ($data as $field => $value) {
            $this->{Str::toCamelCase($field)} = $value;
        }
    }

    public function create(int $userId, array $postData, array $image)
    {
        $sql = "
            INSERT INTO `posts`
            (`user_id`, `title`, `slug`, `body`, `created_at`, `teaser`, `link`)
            VALUES (:userId, :title, :slug, :body, :createdAt, :teaser, :link)
        ";

        $slug = Str::slug($postData['title']);

        $this->db->query($sql, [
            'userId' => $userId,
            'title' => $postData['title'],
            'slug' => $slug,
            'body' => $postData['body'],
            'createdAt' => time(),
            'teaser' => $postData['teaser'],
            'link' => $postData['link']
        ]);

        $sql = "SELECT MAX(`id`) AS 'id' FROM `posts` WHERE `user_id` = :user_id";
        $postQuery = $this->db->query($sql, [ 'user_id' => $userId ]);

        $postId = $postQuery->first()['id'];

        $fileStorage = new FileStorage($image);
        $fileStorage->saveIn(Config::get('app.uploadFolder'));
        $imageName = $fileStorage->getGeneratedName();

        $sql = "
            INSERT INTO `post_images`
            (`post_id`, `filename`, `created_at`)
            VALUES (:post_id, :filename, :created_at)
        ";

        $this->db->query($sql, [
            'post_id' => $postId,
            'filename' => $imageName,
            'created_at' => time()
        ]);
    }

    public function edit(array $postData): bool
    {
        $sql = "
            UPDATE `posts`
            SET `title` = :title, `slug` = :slug, `body` = :body, `teaser` = :teaser, `link` = :link
            WHERE `id` = :id
        ";

        $slug = Str::slug($postData['title']);

        $postData = [
            'id' => $this->getId(),
            'title' => $postData['title'],
            'slug' => $slug,
            'body' => $postData['body'],
            'teaser' => $postData['teaser'],
            'link' => $postData['link']
        ];

        $editQuery = $this->db->query($sql, $postData);

        $this->fill($postData);

        return (bool) $editQuery->count();
    }

    public function delete(): bool
    {
        $images = $this->getImages();

        foreach ($images as $image) {
            FileStorage::delete($image);
        }

        $sql = "DELETE FROM `posts` WHERE `id` = :id";
        $deleteQuery = $this->db->query($sql, [ 'id' => $this->getId() ]);

        return (bool) $deleteQuery->count();
    }

   

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getUserId(): int
    {
        return (int) $this->userId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getCreatedAt(): string
    {
        return date('D, d.m.Y', $this->createdAt);
    }

    public function getTeaser(): string
    {
        return $this->teaser;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getUser(): User
    {
        $user = new User($this->db);
        $user->find($this->getUserId());
        return $user;
    }

    public function getImages(): array
    {
        $sql = "SELECT `filename` FROM `post_images` WHERE `post_id` = :post_id";
        $query = $this->db->query($sql, [ 'post_id' => $this->getId() ]);

        $images = array_map(function ($image) {
            return DIRECTORY_SEPARATOR . Config::get('app.uploadFolder') . DIRECTORY_SEPARATOR . $image['filename'];
        }, $query->results());

        return $images;
    }

    public function getPosts(): array
    {
        $sql = "SELECT * FROM `posts`";
        $postsQuery = $this->db->query($sql);

        $posts = [];

        foreach ($postsQuery->results() as $result) {
            $posts[] = new Post($this->db, $result);
        }

        return $posts;
    }

    


}
