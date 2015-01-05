<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>商家列表</h1>
<ul>
<?php foreach ($merchants as $merchant): ?>
	<li>
		<?= $merchant->ID ?>
		<?= Html::encode("$merchant->name") ?>
	</li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>