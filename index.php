<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

require_once("config.php");
function __autoload($class_name) {
	if (preg_match('/Lib/i', $class_name)) {
		require_once("./Lib/$class_name.php");
	}
}

$merchants = new Lib_Merchant();
$merchants = $merchants->find();

foreach ($merchants as $m) {
	echo '<h1>'.$m->name .'</h1>';
	foreach ($m->channels() as $c){
		echo '<li><a href="'.$c->link().'">'.$c->name.'</a></li>';
	}
}
?>