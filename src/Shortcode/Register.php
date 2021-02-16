<?php


namespace Vulcan\Shortcode;


class Register {
	public static function bind() {

		$shortcodes = [];
		foreach ( glob( get_config( 'path' ) . 'resources/Shortcode/*.php' ) as $file ) {
			require_once $file;

			$class = basename( $file, '.php' );

			if ( class_exists( 'Resource\Shortcode\\' . $class ) ) {
				$classFQN     = 'Resource\Shortcode\\' . $class;
				$class        = new $classFQN;
				$shortcodes[] = [ $classFQN::$shortcode, [ $class::class, 'register' ] ];

			}
		}

		foreach ($shortcodes as $shortcode) {
			add_shortcode($shortcode[0], $shortcode[1]);
		}
	}
}