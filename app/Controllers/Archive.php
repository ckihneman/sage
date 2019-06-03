<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Archive extends Controller
{
    public static function getRecents()
    {
        $recents = wp_get_recent_posts([
            'post_status' => 'publish',
        ]);

        return self::formatPosts($recents);
    }

    public static function getTags()
    {
        return self::formatTerms(get_tags());
    }

    public static function getCategories()
    {
        return self::formatTerms(get_categories());
    }

    public static function formatTerms($terms)
    {
        return array_map(function($tag) {
            return (object) [
                'text' => $tag->name,
                'link' => get_term_link($tag),
            ];
        }, $terms);
    }

    public static function formatPosts($posts)
    {
        return array_map(function($item) {
            return (object) [
                'text' => $item['post_title'],
                'link' => get_permalink($item['ID']),
            ];
        }, $posts);
    }
}
