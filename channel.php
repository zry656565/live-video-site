<?php require_once(dirname(__FILE__) . "/includes/base.php"); ?>
<?php
$channel = new Lib_Channel();
$channel = $channel->load($_GET['id']);
?>

<!doctype html>
<html lang="zh">
<?php include_once(SITE_ROOT . '/layouts/head.php') ?>
<body>
<?php include_once(SITE_ROOT . '/layouts/header.php') ?>

<div class="container">
	<div style="padding: 40px 15px;">
		<?php
		echo '<h1>'.$channel->name .'</h1>';
		foreach ($channel->cameras() as $c){
			echo '<li><a href="'.$c->link().'">'.$c->description.'</a></li>';
		}
		?>
	</div>
</div><!-- /.container -->

<?php include_once(SITE_ROOT . '/layouts/footer.php') ?>
</body>
</html>
