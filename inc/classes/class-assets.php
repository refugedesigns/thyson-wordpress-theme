<?php

/**
 * Load theme assets
 * 
 * @package thyson
 */

 namespace THYSON\Inc;

 use THYSON\Inc\Traits\Singleton;

 class Assets {
    
    use Singleton;

    public function __construct() {
        $this->setup_hooks();
    }
    
    protected function setup_hooks() {
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action('wp_head', [$this, 'add_meta']);
    }

    public function register_styles() {
        //Register all styles
        wp_register_style('main-css', get_stylesheet_uri(), [], filemtime(THYSON_DIR_PATH. '/style.css'), 'all');
        wp_register_style('bootstrap-css', THYSON_DIR_URI . '/assets/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('font-awesome-css', THYSON_DIR_URI . '/assets/css/font-awesome.min.css', [], false, 'all');
        wp_register_style('ioni-icons-css', THYSON_DIR_URI . '/assets/css/ionicons.min.css', [], false, 'all');
        wp_register_style('datepicker-css', THYSON_DIR_URI . '/assets/css/datepicker.css', [], false, 'all');
        wp_register_style('carousel-css', THYSON_DIR_URI . '/assets/css/owl.carousel.css', [], false, 'all');
        wp_register_style('transitions-css', THYSON_DIR_URI . '/assets/css/owl.transitions.css', [], false, 'all');
        wp_register_style('style-css', THYSON_DIR_URI . '/assets/css/style.css', [], false, 'all');
        wp_register_style('colors-css', THYSON_DIR_URI . '/assets/css/colors/color.css', [], false, 'all');


        //Enqueue all styles
        wp_enqueue_style('main-css');
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('font-awesome-css');
        wp_enqueue_style('ioni-icons-css');
        wp_enqueue_style('datepicker-css');
        wp_enqueue_style('carousel-css');
        wp_enqueue_style('transitions-css');
        wp_enqueue_style('style-css');
        wp_enqueue_style('colors-css');
    }

    public function register_scripts() {
        wp_register_script('jquery-js', THYSON_DIR_URI . '/assets/js/jquery.min.js', ['jquery'], false, true);
        wp_register_script('main-js', THYSON_DIR_URI . '/assets/js/main.js', [], false, true);
        wp_register_script('popper-js', THYSON_DIR_URI . '/assets/js/popper.min.js', [], false, true);
        wp_register_script('bootstrap-js', THYSON_DIR_URI . '/assets/js/bootstrap.min.js', [], false, true);
        wp_register_script('plugins-js', THYSON_DIR_URI . '/assets/js/plugins.js', [], false, true);
        wp_register_script('reveal-js', THYSON_DIR_URI . '/assets/js/reveal-home.js', [], false, true);
        wp_register_script('custom-js', THYSON_DIR_URI . '/assets/js/custom.js', [], false, true);

        //Enqueue all scripts
        wp_enqueue_script('jquery-js');
        wp_enqueue_script('main-js');
        wp_enqueue_script('popper-js');
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('plugins-js');
        wp_enqueue_script('reveal-js');
        wp_enqueue_script('custom-js');
    }

    public function add_meta() {
        ?>
    <meta name="description"  content="Professional Creative Template" />
	<meta name="author" content="Erasmus Antwi">
	<meta name="keywords"  content="refugedesign, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
	<meta property="og:title" content="Professional Creative Template" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Professional Creative Template" />
	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="https://twitter.com/IvanGrozdic" />
	<meta name="twitter:domain" content="http://ivang-design.com/" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Professional Creative Template" />
	<meta name="twitter:image" content="http://ivang-design.com/" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <?php }
 }