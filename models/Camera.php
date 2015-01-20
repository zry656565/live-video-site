<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 15/1/5
 * Time: 下午11:32
 */

namespace app\models;

use yii\db\ActiveRecord;

class Camera extends ActiveRecord
{
	public function scenarios() {
		return [
			'default' => [ 'id', 'description', 'ip', 'port', 'available', 'channel_id' ],
		];
	}

	public function rules() {
		return [
			[['id', 'ip', 'port', 'available', 'channel_id'], 'required'],
		];
	}
}