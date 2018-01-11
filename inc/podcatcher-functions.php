<?php
/**
 * Custom template tags for this theme + WP Podcatcher plugin.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Parsec
 */

/**
 * Function to check if WP Podcatcher is activated.
 *
 * @return boolean
 */
function has_podcatcher() {
	return defined( 'WPP_VERSION' );
}

/**
 * Function that returns text links of sponsors.
 *
 * @param $post_id int Post's ID.
 * @return String.
 */
function parsec_sponsor_text_links( $post_id = null, $text_only = false ) {
	$post_id = ( ! empty( $post_id ) ) ? $post_id : get_the_id();
	$sponsor_ids = get_post_meta( $post_id, 'wpp_episode_sponsor', true );
	if ( ! $sponsor_ids ) {
		return;
	}

	$sponsor_text_links = '';
	if ( $text_only ) {
		$format = '<a class="wpp-sponsor" href="%1$s" title="%2$s">%2$s</a> ';

		foreach ( $sponsor_ids as $id ) {
			$sponsor_text_links .= sprintf( $format,
				esc_url( get_the_permalink( $id ) ),
				esc_attr( get_the_title( $id ) )
			);
		}
		return trim( $sponsor_text_links );
	}

	$format = '<a class="wpp-sponsor" href="%1$s" title="%3$s">%2$s</a>';

	foreach ( $sponsor_ids as $id ) {
		$sponsor_text_links .= sprintf( $format,
			esc_url( get_the_permalink( $id ) ),
			get_the_post_thumbnail( $id, 'full' ),
			esc_attr( get_the_title( $id ) )
		);
	}

	return $sponsor_text_links;
}