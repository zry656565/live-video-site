<?php

class DataConnection {
	private static $connection = null;

	public static function getConnection() {
		if (self::$connection === null) {
			self::$connection = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
			mysql_select_db(DB_DATABASE) or die(mysql_error());
			mysql_query('set names utf8') or die(mysql_error());
		}
		return self::$connection;
	}
}

class Lib_Base {
	public $key, $table, $columns;

	public function init($options) {
		$this->key = $options['key'];
		$this->table = $options['table'];
		$this->columns = $options['columns'];
	}

	public function load($id = null) {
		$key = $this->key;
		if ($id = null) {
			$id = $this->$key;
		}
		DataConnection::getConnection();
		$sql = "select * from {$this->table} where {$this->columns[$key]} = $id";
		$rs = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($rs);
		if ($row) {
			foreach ($this->columns as $objCol => $dbCol) {
				$this->$objCol = $row[$dbCol];
			}
			return $this;
		} else {
			return null;
		}
	}

	public function find() {
		$result = [];
		$where = 'where 1=1 ';
		foreach ($this->columns as $objCol => $dbCol) {
			if ($this->$objCol) {
				$where .= "and $dbCol = {$this->$objCol} ";
			}
		}
		DataConnection::getConnection();
		$sql = "select * from {$this->table} $where";
		$rs = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($rs);
		while ($row) {
			$object = clone $this;
			foreach ($this->columns as $objCol => $dbCol) {
				$object->$objCol = $row[$dbCol];
			}
			$result[] = $object;
			$row = mysql_fetch_array($rs);
		}
		return $result;
	}

	public function link() {
		$class = preg_replace('/Lib_(.*)/', '$1', get_class($this));
		$key = $this->key;
		return strtolower($class).".php?{$this->key}={$this->$key}";
	}
}