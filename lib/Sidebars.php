<?php

namespace ReCHallenge;

/**
 * Register theme widget areas.
 *
 * @package ReCHallenge
 */
class Sidebars
{
    /**
     * Hook into WordPress.
     */
    static function register_hooks()
    {

        // Add sidebars
        add_action('widgets_init', [__CLASS__, "register_sidebars"]);
    }

    static function register_sidebars()
    {

        // Banner Bar
        register_sidebar([
            'name' => "Banner",
            'id' => 'banner-bar',
            'description' => 'Front page banner.',
            'class' => '',
            'before_widget' => '<div class="small-12 large-8 column">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        ]);

        // Footer Left
        register_sidebar([
            'name' => "Footer (Left)",
            'id' => 'footer-left',
            'description' => 'Left part of the page footer.',
            'class' => '',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ]);

        // Footer Right
        register_sidebar([
            'name' => "Footer (Right)",
            'id' => 'footer-right',
            'description' => 'Right part of the page footer.',
            'class' => '',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h1 class="small">',
            'after_title' => '</h1>',
        ]);
    }
}