<?php


namespace Vulcan\Console;


class Helpers {

	public static function nameStub($content, $changes) {
		foreach ($changes as $key => $change) {
			$content = str_replace($key, $change, $content);
		}

		return $content;
	}

}