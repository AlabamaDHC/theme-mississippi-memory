<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 * Template Name: County Page Template
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['d'] = 'd="M444.06,562.65a26.06,26.06,0,0,0-23.4,37.61l23.4,34.39,23.4-34.38a26.06,26.06,0,0,0-23.4-37.62m.32,39.53v.08c-.11,0-.22,0-.33,0s-.21,0-.32,0v-.08a11.64,11.64,0,0,1,0-23.22v-.08c.11,0,.21,0,.32,0s.22,0,.33,0V579a11.64,11.64,0,0,1,0,23.22"';

Timber::render( array( 'page-' . $post->post_name . '.twig', 'page-county.twig' ), $context );
