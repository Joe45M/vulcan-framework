<?php


namespace Vulcan\Hook;


interface Hook {

	/**
	 * @param $methods
	 *
	 * @return mixed
	 */
	public static function execute($methods);
}