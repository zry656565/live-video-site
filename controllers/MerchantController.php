<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 15/1/5
 * Time: 下午2:35
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Merchant;

class MerchantController extends Controller
{
	public function actionIndex()
	{
		$query = Merchant::find();

		$pagination = new Pagination([
			'defaultPageSize'=> 5,
			'totalCount' => $query->count(),
		]);

		$merchants = $query->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

		return $this->render('index', [
			'merchants' => $merchants,
			'pagination' => $pagination,
		]);
	}
}