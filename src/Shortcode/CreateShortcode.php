<?php


namespace Vulcan\Shortcode;


interface CreateShortcode {

	/**
	 * Handle logic and return data, or view.
	 * @return mixed
	 */
	public static function register($atts = null);
}