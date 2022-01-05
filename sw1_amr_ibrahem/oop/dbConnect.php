<?php

class dbConnect{
	private $con;
	private static $db_instance=null;

	public static function getInstance() 
    { 
        if (self::$db_instance == null) 
            self::$db_instance = new dbConnect(); 
        return self::$db_instance; 
    } 

	public function connect(){
		require_once 'config.php';
		$this->con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		return $this->con;
	}

}

?>