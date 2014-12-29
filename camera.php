<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 14/12/29
 * Time: 上午9:39
 */

require_once("config.php");
function __autoload($class_name) {
	if (preg_match('/Lib/i', $class_name)) {
		require_once("./Lib/$class_name.php");
	}
}

$camera = new Lib_Camera();
$camera = $camera->load($_GET['id']);

echo '<h1>'.$camera->description .'</h1>';
?>