<?php


namespace Vulcan\Console\Commands;


use Vulcan\Console\Helpers;

class GenerateCptCommand implements Command {

	public static function execute( $args ) {
		$stub = file_get_contents( plugin_dir_path( __FILE__ ) . '../../Stub/Cpt.php' );

		$edited_stub = Helpers::nameStub($stub, [
			'ClassName' => $args[2],
			'PostTypeName' => strtolower($args[2]),
		]);

		$name = get_config('path') . '/resources/Cpt/' . $args[2] . '.php';

		file_put_contents($name, $edited_stub );

		echo 'Created ' . $name;

		return true;
	}
}