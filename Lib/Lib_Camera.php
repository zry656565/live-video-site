<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 14/12/29
 * Time: 上午8:46
 */

class Lib_Camera extends Lib_Base{
	public $id, $description, $ip, $port, $available, $channelId;

	public function __construct() {
		$options = [
			'key' => 'id',
			'table' => 'Camera',
			'columns' => [
				'id' => 'id',
				'description' => 'description',
				'ip' => 'ip',
				'port' => 'Port',
				'available' => 'available',
				'channelId' => 'Channel_Id',
			],
		];
		parent::init($options);
	}

	public function channel() {
		$channel = new Lib_Channel();
		$channel->id = $this->channelId;
		return $channel->load();
	}
}