<?php


namespace Vulcan\Page;


class Register {
	public static function bind() {
		foreach (glob(get_config('path') . 'resources/Page/*.php') as $file)
		{
			require_once $file;

			$class = basename($file, '.php');

			if (class_exists('Resource\Page\\' . $class))
			{
				$classFQN = 'Resource\Page\\' . $class;
				$instance = new $classFQN();

				\add_menu_page( $instance::$pageTitle,
					$instance::$menuTitle,
					$instance::$capabilities,
					$instance::$menuSlug,
					[ $instance, 'register' ],
					$instance::$iconUrl
				);
			}
		}
	}
}