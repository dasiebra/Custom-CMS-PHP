


<section>

<div class="container-headarea mx-48 mt-20 border-2 border-pink-50 border-b-teal-500 flex flex-col justify-center justify-items-center items-center ">
    <?php foreach ($post->getImages() as $image): ?>
        <img src="<?php echo $image; ?>">
    <?php endforeach; ?>
    <span class="inline-block"><h1 class="headline font-serif text-3xl mt-10 mb-10 text-gray-800"><?php echo $post->getTitle(); ?></h1></span>
    <span class="inline-block"><p class="teaser font-serif text-m mb-4 text-gray-800"><?php echo $post->getTeaser() ?></p></span>
    <span class="inline-block"><p class="author block text-s  text-gray-800">von <?php echo $post->getUser()->getFullName(); ?></p></span>
    <span class="inline-block"><p class="createt-at font-serif text-xs mb-10 text-gray-800"><?php echo $post->getCreatedAt(); ?></p></span>
    <span class="inline-block"><p class="link font-serif text-m mb-10 text-gray-800"><a href="<?php echo $post->getLink(); ?>">Link zum Artikel</a></p></span>
    <a href=""></a>
</div>


<div class="container-textarea mx-48 my-24">
    <p class="textarea font-serif text-gray-800"><?php echo $post->getBody(); ?></p>
</div>

<?php $post->getSlug(); ?>

<?php $token = $csrf::token(); ?>
<?php if ($user->isLoggedIn()): ?>
<?php endif; ?>


</section>