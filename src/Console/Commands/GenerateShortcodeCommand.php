<?php


namespace Vulcan\Console\Commands;


use Vulcan\Console\Helpers;

class GenerateShortcodeCommand {

	public static function execute( $args ) {

		// Controller

		$stub = file_get_contents( plugin_dir_path( __FILE__ ) . '../../Stub/Shortcode.php' );

		$edited_stub = Helpers::nameStub($stub, [
			'ClassName' => $args[2],
			'ShortcodeName' => strtolower($args[2]),
		]);

		$name = get_config('path') . '/resources/Shortcode/' . $args[2] . '.php';

		file_put_contents($name, $edited_stub );

		echo 'Created ' . $name;

		echo PHP_EOL;

		$name = get_config('path') . '/resources/views/shortcodes/' . strtolower($args[2]) . '.blade.php';

		file_put_contents($name, '' );

		echo 'Created ' . $name;

		return true;
	}

}