<?php


namespace Vulcan\Cpt;


class Register {
	public static function bind() {
		foreach ( glob( get_config( 'path' ) . 'resources/Cpt/*.php' ) as $file ) {
			require_once $file;

			$class = basename( $file, '.php' );

			if ( class_exists( 'Resource\Cpt\\' . $class ) ) {
				$classFQN = 'Resource\Cpt\\' . $class;
				$instance = new $classFQN();
				$instance->register();
			}
		}
	}
}