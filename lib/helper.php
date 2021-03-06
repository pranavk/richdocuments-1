<?php
/**
 * ownCloud - Richdocuments App
 *
 * @author Victor Dubiniuk
 * @copyright 2013 Victor Dubiniuk victor.dubiniuk@gmail.com
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 */

namespace OCA\Richdocuments;

class Helper {
	const APP_ID = 'richdocuments';

	public static function getNewFileName($view, $path, $prepend = ' '){
		$fileNum = 1;

		while ($view->file_exists($path)){
			$fileNum += 1;
			$path = preg_replace('/(\.|' . $prepend . '\(\d+\)\.)([^.]*)$/', $prepend . '(' . $fileNum . ').$2', $path);
		};

		return $path;
	}
}
