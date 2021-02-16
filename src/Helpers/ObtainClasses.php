<?php

namespace Vulcan\Helpers;

class ObtainClasses {
	public static function getClasses($dir) {
		foreach (glob(plugin_dir_path(__FILE__) . $dir) as $file)
		{
			require_once $file;

			// get the file name of the current file without the extension
			// which is essentially the class name
			$class = basename($file, '.php');

			if (class_exists('Resource\Cpt\\' . $class))
			{
				$classFQN = 'Resource\Cpt\\' . $class;
				$instance = new $classFQN();
			}
		}
	}
}