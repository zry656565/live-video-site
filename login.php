<?php
require_once(dirname(__FILE__) . "/includes/base.php");
?>

<!doctype html>
<html lang="zh">
<?php include_once(SITE_ROOT . '/layouts/head.php') ?>
<body>
<?php include_once(SITE_ROOT . '/layouts/header.php') ?>

<div class="container">
	<div class="content">
		<h1>新世界直播系统</h1>
		<p>请先登陆您的账号，如果没有账号，请与管理员联系。</p>
		<form id="login-form" role="form" method="post" action="merchant.php">
			<div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入您的账号">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入您的密码">
			</div>
			<button type="submit" class="btn btn-default">提交</button>
		</form>
	</div>
</div><!-- /.container -->

<?php include_once(SITE_ROOT . '/layouts/footer.php') ?>
</body>
</html>
