<?php
/*
Plugin Name: Delta Growth Core
Description: Core functionalities including custom post types and custom fields.
Version: 1.0
Author: Allen Oluwatobi Adeola
*/
function dg_register_testimonials_cpt() {
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => true
    ));
}
add_action('init', 'dg_register_testimonials_cpt');
