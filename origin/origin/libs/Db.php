<?php
namespace origin\libs;
class Db extends \PDO{
	public function __construct(){
		$dsn = 'mysql:host=localhost;dbname=is';
		$username = 'root';
		$passwd = '12345678';
		try{
			parent::__construct($dsn, $username, $passwd);
		} catch(\PDOException $e){
			var_dump($e -> getMessage());
		}
		
	}
	
}