<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 14/12/29
 * Time: 上午8:38
 */

class Lib_Merchant extends Lib_Base{
	public $id, $name, $email, $address;

	public function __construct() {
		$options = [
			'key' => 'id',
			'table' => 'Merchant',
			'columns' => [
				'id' => 'ID',
				'name' => 'name',
				'email' => 'email',
				'address' => 'address',
			],
		];
		parent::init($options);
	}

	public function channels() {
		$channel = new Lib_Channel();
		$channel->merchantId = $this->id;
		return $channel->find();
	}
}