<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
require_once(dirname(__FILE__) . "/includes/base.php");

$camera = new Lib_Camera();
$camera = $camera->load($_GET['id']);

echo '<h1>'.$camera->description .'</h1>';
?>