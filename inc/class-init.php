<?php
defined( 'ABSPATH' ) || exit;

class Templora {

    private static $instance = null;

    // Get single instance of the plugin
    public static function get_instance() {
        if ( self::$instance === null ) {
            self::$instance = new self();
            self::$instance->init();
        }
        return self::$instance;
    }

    // Private constructor to prevent direct instantiation
    private function __construct() {}

    // Initialize plugin: add hooks here
    private function init() {
        // Load pattern registration class
        require_once TEMPLORA_DIR_PATH . 'inc/class-patterns.php';

        // Register block patterns
        add_action( 'init', [ 'TemploraPatterns', 'register_patterns' ] );

        // Enqueue scripts for Gutenberg editor sidebar
        add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_editor_assets' ] );
    }

    // Enqueue JS for Gutenberg sidebar template library
    public function enqueue_editor_assets() {
        wp_enqueue_script(
            'templora-template-library',
            TEMPLORA_DIR_URL . 'build/index.js',
            [ 'wp-plugins', 'wp-edit-post', 'wp-element', 'wp-components', 'wp-blocks', 'wp-data' ],
            TEMPLORA_VERSION,
            true
        );
    }
}
