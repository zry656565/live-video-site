<?php


require_once(dirname(__FILE__) . "/../config.php");
function __autoload($class_name) {
	if (preg_match('/Lib/i', $class_name)) {
		require_once("Lib/$class_name.php");
	}
}