<?php


/**
 * Bootstrap the theme
 * 
 * @package thyson
 */


 namespace THYSON\Inc;

 use THYSON\Inc\Traits\Singleton;

 class THYSON_THEME {
    
    use Singleton;

    protected function __construct()
    {
        //Load classes here
        Assets::get_instance();
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action('after_setup_theme', array($this, 'after_setup_theme'));
    }

    public function after_setup_theme() {
        add_theme_support('title-tag');

        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height'  => 250,
            'width'   => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]);

        add_theme_support('align-wide');
    }
 }