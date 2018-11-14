<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;

$sources = get_posts(array(
			    'post_type' => 'source',
			    'meta_query' => array(
			        array(
			            'key' => 'event', // name of custom field
			            'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
			            'compare' => 'LIKE'
			        )
			    ),
			    'numberposts' => -1
			));

$context['sources'] = $sources;

if ( post_password_required( $post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( 'single-event.twig', $context );
}
