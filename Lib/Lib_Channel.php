<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 14/12/29
 * Time: 上午8:43
 */

class Lib_Channel extends Lib_Base{
	public $id, $name, $description, $image, $available, $merchantId;

	public function __construct() {
		$options = [
			'key' => 'id',
			'table' => 'Channel',
			'columns' => [
				'id' => 'id',
				'name' => 'name',
				'description' => 'description',
				'image' => 'image',
				'available' => 'available',
				'merchantId' => 'Merchant_ID',
			],
		];
		parent::init($options);
	}

	public function cameras() {
		$camera = new Lib_Camera();
		$camera->channelId = $this->id;
		return $camera->find();
	}
}