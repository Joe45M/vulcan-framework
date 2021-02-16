<?php


namespace Vulcan\Console\Commands;


use Vulcan\Console\Helpers;

class GeneratePageCommand implements Command {

	public static function execute( $args ) {
		$stub = file_get_contents( plugin_dir_path( __FILE__ ) . '../../Stub/Page.php' );

		$edited_stub = Helpers::nameStub( $stub, [
			'ClassName' => $args[2],
			'PageName'  => strtolower( $args[2] ),
			'MenuSlug'  => strtolower( $args[2] ),
		] );

		$name = get_config( 'path' ) . '/resources/Page/' . $args[2] . '.php';

		file_put_contents( $name, $edited_stub );

		echo 'Created ' . $name . PHP_EOL;

		$name = get_config( 'path' ) . '/resources/views/pages/' . strtolower( $args[2] ) . '.blade.php';

		file_put_contents( $name, '' );

		echo 'Created ' . $name;

		return true;
	}

}