<?php


namespace Vulcan\Console;

use Vulcan\Console\Commands\GenerateCptCommand;
use Vulcan\Console\Commands\GeneratePageCommand;
use Vulcan\Console\Commands\GenerateShortcodeCommand;

class Console {
	public static $commands = [
		'make:cpt'       => GenerateCptCommand::class,
		'make:page'      => GeneratePageCommand::class,
		'make:shortcode' => GenerateShortcodeCommand::class,
	];

	public function __construct( $args ) {
		if ( ! $args ) {
			return;
		}

		if ( count( $args ) < 2 ) {
			return;
		}

		// Match the arg to a command.
		if ( array_key_exists( $args[1], self::$commands ) ) {
			$obj = new self::$commands[ $args[1] ];
			$obj->execute( $args );
		}


	}
}