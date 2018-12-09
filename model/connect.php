<?php

class DataBase {
	
	private static $db = null;
	public $msqli;
	
	public static function getDb() {
		if (self::$db == null) {
			self::$db = new DataBase();
		}
		return self::$db;
	}

	private function __construct() {
		$this->msqli = mysqli_connect('localhost', 'root', '', 'depsoft');
	}
	
	public function __destruct() {
		if ($this->msqli) {
			$this->msqli->close();
		}
	}

}

