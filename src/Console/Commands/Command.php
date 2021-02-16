<?php

namespace Vulcan\Console\Commands;

interface Command {
	public static function execute($args);
}