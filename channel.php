<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 14/12/29
 * Time: 上午9:38
 */

require_once("config.php");
function __autoload($class_name) {
	if (preg_match('/Lib/i', $class_name)) {
		require_once("./Lib/$class_name.php");
	}
}

$channel = new Lib_Channel();
$channel = $channel->load($_GET['id']);

echo '<h1>'.$channel->name .'</h1>';
foreach ($channel->cameras() as $c){
	echo '<li><a href="'.$c->link().'">'.$c->description.'</a></li>';
}

?>