<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 14/12/29
 * Time: 上午8:38
 */

class Merchant extends Base{
	public $id, $name, $email, $address;

	public function __construct() {
		$options = [
			'key' => 'id',
			'table' => 'Merchant',
			'columns' => [
				'id' => 'id',
				'name' => 'name',
				'email' => 'email',
				'address' => 'address',
			],
		];
		parent::init($options);
	}

	public function channels() {
		$channel = new Channel();
		$channel->merchantId = $this->id;
		return $channel->find();
	}
}