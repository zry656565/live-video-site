<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 14/12/29
 * Time: 上午8:43
 */

class Channel extends Base{
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
		$camera = new Camera();
		$camera->channelId = $this->id;
		return $camera->find();
	}
}