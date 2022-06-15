<?php
/**
 * Plugin Name: Module SECURITY TOOL
 * Plugin URI: https://github.com/anacronox/wp-security-tool
 * Description: Simple security tools for wordpress
 * Version: 1.0
 * Author: John BOTELLA
 * Author URI: https://www.john-botella.fr
 */

// Remove author infos from sitemap
function remove_author_category_pages_from_sitemap($provider, $name)
{
	if ('users' === $name) {
		return false;
	}
	return $provider;
}

add_filter('wp_sitemaps_add_provider', 'remove_author_category_pages_from_sitemap', 10, 2);