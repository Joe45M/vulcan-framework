<?php


namespace Resource\Page;


class ClassName {
	public static $pageTitle = 'ClassName';

	public static $menuTitle = 'ClassName';

	public static $capabilities = 'manage_options';

	public static $menuSlug = 'MenuSlug';

	public static $iconUrl = null;

	public static function register() {
		echo blade()->render('pages.PageName');
	}
}
