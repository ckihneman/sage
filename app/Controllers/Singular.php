<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Singular extends Controller
{
    // Get page data
    public static function page() {
        return [
            'title' => get_the_title(),
            'content' => self::getContent(),
        ];
    }

    // Get single post data
    public static function single() {
        return [
            'title' => get_the_title(),
            'link' => get_permalink(),
            'date' => get_the_date(),
            'timestamp' => get_post_time('c', true),
            'author' => self::getAuthor(true),
            'image' => self::getImage('large'),
            'content' => self::getContent(),
        ];
    }

    // Get post data for archive
    public static function archiveItem() {
        return [
            'title' => get_the_title(),
            'type' => get_post_type(),
            'link' => get_permalink(),
            'date' => get_the_date(),
            'timestamp' => get_post_time('c', true),
            'author' => self::getAuthor(true),
            'image' => self::getImage('medium'),
            'excerpt' => get_the_excerpt(),
        ];
    }

    // Get author with or without avatar
    public static function getAuthor($withAvatar = false)
    {
        $authorId = get_the_author_meta('ID');

        return (object) [
            'name' => get_the_author(),
            'link' => get_author_posts_url($authorId),
            'avatar' => $withAvatar ? get_avatar($authorId, 60) : false,
        ];
    }

    // Get post featured image by size
    public static function getImage($size = 'medium')
    {
        $imageId = get_post_thumbnail_id();
        $imageLink = get_the_post_thumbnail_url(null, $size);
        $imageAltText = get_post_meta($imageId, '_wp_attachment_image_alt', true);

        return (object) [
            'link' => $imageLink,
            'alt' => $imageAltText,
        ];
    }

    // Get post content
    public static function getContent()
    {
        return apply_filters('the_content', get_the_content());
    }
}
