<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once(dirname(__FILE__) . "/includes/base.php");

$merchants = new Lib_Merchant();
$merchants = $merchants->find();

foreach ($merchants as $m) {
	echo '<h1>'.$m->name .'</h1>';
	foreach ($m->channels() as $c){
		echo '<li><a href="'.$c->link().'">'.$c->name.'</a></li>';
	}
}
?>