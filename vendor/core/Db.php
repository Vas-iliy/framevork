<?php


namespace vendor\core;

use R;

class Db
{
	protected $pdo;
	protected static $instance;

	protected function __construct ()
	{
		require LIBS . '/rb.php';
		$db = require ROOT . '/config/config_db.php';
		$options = [
			\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
		];
		R::setup($db['dsn'], $db['user'], $db['pass'], $options);
		R::freeze(true);//не позволяет динамически изменять тип столбцов
		//R::fancyDebug(TRUE);//включаем дебагер Redbean
		//$this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);

	}

	public static function instance ()
	{
		if (self::$instance === null) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function execute ($sql, $params = [])
	{
		$stmt = $this->pdo->prepare($sql);
		return $stmt->execute($params);
	}

	public function query ($sql, $params = [])
	{
		$stmt = $this->pdo->prepare($sql);
		$res = $stmt->execute($params);
		if ($res !== false){
			return $stmt->fetchAll();
		}
		return [];
	}
}