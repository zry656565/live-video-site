<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 15/1/1
 * Time: 下午6:48
 */

class Lib_User extends Lib_Base{
	public $id, $username, $password;

	public function __construct() {
		$options = [
			'key' => 'id',
			'table' => 'User',
			'columns' => [
				'id' => 'id',
				'username' => 'username',
				'password' => 'password',
			],
		];
		parent::init($options);
	}
}