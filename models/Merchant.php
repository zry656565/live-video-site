<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 15/1/5
 * Time: 下午2:31
 */

namespace app\models;

use yii\db\ActiveRecord;

class Merchant extends ActiveRecord
{
	public function scenarios() {
		return [
			'default' => [ 'id', 'name', 'owner_id', 'email', 'address' ],
		];
	}

	public function rules() {
		return [
			[['id', 'name', 'owner_id'], 'required'],
			['email', 'email']
		];
	}
}