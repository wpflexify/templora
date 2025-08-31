<?php
defined( 'ABSPATH' ) || exit;

class TemploraPatterns {

    public static function register_patterns() {
        register_block_pattern(
            'templora/hero-header',
            [
                'title'       => __( 'Hero Header', 'templora' ),
                'description' => __( 'A large hero section with heading and button.', 'templora' ),
                'content'     => '
                    <!-- wp:cover {"url":"'. TEMPLORA_DIR_URL .('assets/images/team.jpg').'","dimRatio":70,"metadata":{"patternName":"templora/hero-header","name":"Hero Header"}} -->
                    <div class="wp-block-cover"><img class="wp-block-cover__image-background" alt="" src="'. TEMPLORA_DIR_URL .('assets/images/team.jpg').'" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
                    <h2 class="wp-block-heading has-text-align-center">Welcome to Templora</h2>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">Get Started</a></div>
                    <!-- /wp:button --></div>
                    <!-- /wp:buttons --></div></div>
                    <!-- /wp:cover -->
                ',
            ]
        );

        register_block_pattern(
            'templora/about-page',
            [
                'title'       => __( 'About Page', 'templora' ),
                'description' => __( 'Sample About page with text and image.', 'templora' ),
                'content'     => '
                    <!-- wp:group -->
                    <div class="wp-block-group">
                      <!-- wp:heading -->
                      <h2>About Our Team</h2>
                      <!-- /wp:heading -->
                      <!-- wp:paragraph -->
                      <p>Templora provides demo pages and patterns for quick site building.</p>
                      <!-- /wp:paragraph -->
                      <!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large"} -->
                      <figure class="wp-block-image aligncenter size-large is-resized">
                        <img src="'. TEMPLORA_DIR_URL .('assets/images/team.jpg').'" alt="Team"/>
                      </figure>
                      <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                ',
            ]
        );
    }
}
