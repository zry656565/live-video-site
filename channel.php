<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
require_once(dirname(__FILE__) . "/includes/base.php");

$channel = new Lib_Channel();
$channel = $channel->load($_GET['id']);

echo '<h1>'.$channel->name .'</h1>';
foreach ($channel->cameras() as $c){
	echo '<li><a href="'.$c->link().'">'.$c->description.'</a></li>';
}

?>