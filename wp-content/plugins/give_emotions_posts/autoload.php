<?php
/**
 * Created by PhpStorm.
 * User: grizz
 * Date: 10.10.2017
 * Time: 21:39
 */
spl_autoload_register(function ($className) {
	$className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
	$filePath = plugin_dir_path(__FILE__) . 'classes' . DIRECTORY_SEPARATOR . $className . '.php';
	if (file_exists($filePath)) {
		require_once $filePath;
	}
});