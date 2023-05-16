<?php

namespace App\Helpers;

class Str {
    /*public function toCamelCase(string $subject): string
    {
        $words = explode('_', $subject);

        $camelCase = '';

        foreach ($words as $index => $word) {
            if ($index === 0) {
                $camelCase .= $word;
                continue;
            }

            $camelCase .= ucfirst($word);
        }

        return $camelCase;
    }*/

    //nimmt einen String und gibt ihn in der PascalCase Schreibweise zurück
    public static function toPascalCase(string $subject): string
    {
        return str_replace('_', '', ucwords($subject, '_'));
    }

    //nimmt einen String und gibt ihn inder CamelCase Schreibweise zurück
    public static function toCamelCase(string $subject): string
    {
        return lcfirst(self::toPascalCase($subject));
    }

    // Generate random token
    public static function token(): string
    {
        return bin2hex(random_bytes(16));
    }


    //nimmt einen String und macht daraus einen slug
    public static function slug(string $string)
    {
        $disallowedCharacters = '/[^\-\s\pN\pL]+/';
        $spacesDuplicateHyphens = '/[\-\s]+/';

        $slug = mb_strtolower($string, 'UTF-8');
        $slug = preg_replace($disallowedCharacters, '', $slug);
        $slug = preg_replace($spacesDuplicateHyphens, '-', $slug);
        $slug = trim($slug, '-');

        return $slug;
    }
}
