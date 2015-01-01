<?php require_once(dirname(__FILE__) . "/includes/base.php"); ?>
<?php
	$merchants = new Lib_Merchant();
	$merchants = $merchants->find();
?>

<!doctype html>
<html lang="zh">
<?php include_once(SITE_ROOT . '/layouts/head.php') ?>
<body>
	<?php include_once(SITE_ROOT . '/layouts/header.php') ?>

	<div class="container">
		<div style="padding: 40px 15px;">
		<?php
		foreach ($merchants as $m) {
			echo '<h1>'.$m->name .'</h1>';
			foreach ($m->channels() as $c){
				echo '<li><a href="'.$c->link().'">'.$c->name.'</a></li>';
			}
		}
		?>
		</div>
	</div><!-- /.container -->

	<?php include_once(SITE_ROOT . '/layouts/footer.php') ?>
</body>
</html>
