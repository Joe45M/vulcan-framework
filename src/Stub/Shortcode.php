<?php


use Vulcan\Shortcode\CreateShortcode;

class ClassName implements CreateShortcode {

	public static $shortcode = 'ShortcodeName';

	public static function register($atts = null) {
		return blade()->render('shortcodes.ShortcodeName', ['name' => 'joe']);
	}
}