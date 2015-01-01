<?php require_once(dirname(__FILE__) . "/includes/base.php"); ?>
<?php
$camera = new Lib_Camera();
$camera = $camera->load($_GET['id']);
?>

<!doctype html>
<html lang="zh">
<?php include_once(SITE_ROOT . '/layouts/head.php') ?>
<body>
<?php include_once(SITE_ROOT . '/layouts/header.php') ?>

<div class="container">
	<div style="padding: 40px 15px;">
		<?php
		echo '<h1>'.$camera->description .'</h1>';
		?>
	</div>
</div><!-- /.container -->

<?php include_once(SITE_ROOT . '/layouts/footer.php') ?>
</body>
</html>
