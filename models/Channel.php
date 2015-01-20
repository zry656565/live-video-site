<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 15/1/5
 * Time: 下午11:32
 */

namespace app\models;

use yii\db\ActiveRecord;

class Channel extends ActiveRecord
{
	public function scenarios() {
		return [
			'default' => [ 'id', 'name', 'description', 'image', 'available', 'merchant_id' ],
		];
	}

	public function rules() {
		return [
			[['id', 'name', 'available', 'merchant_id'], 'required'],
		];
	}
}