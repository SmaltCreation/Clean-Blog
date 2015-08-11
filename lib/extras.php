<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * @param $post
 *
 * @return string Background image url
 */
function cleanblog_image_url($post) {
	if ((is_single() || is_page()) && has_post_thumbnail()) {
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');

		return esc_url($image[0]);
	}

	return esc_url(get_theme_mod('cleanblog_header') ?: get_template_directory_uri().'/assets/img/home-bg.jpg');
}

/**
 * @return string|void Page subtitle
 */
function cleanblog_subheading() {
	global $wp_query;

	if (is_home()) {
		return get_bloginfo('description');
	}

	if (is_archive() || is_category() || is_tag() || is_author() || is_search()) {
		switch ($wp_query->found_posts) {
			case 0:
				return __('No results');
				break;

			case 1:
				return __('One result');
				break;

			default:
				return $wp_query->found_posts.' '.__('results');
				break;
		}
	}

	if (($subtitle = get_post_custom_values('subtitle'))) {
		return $subtitle[0];
	}

	return get_the_excerpt();
}
