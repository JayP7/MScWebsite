<?php


class Database {
    protected static $_dbInstance = null;
    protected $_dbHandle;
    
public static function getInstance() {
    $username ='root';
    $password ='sgh970';
    $host ='localhost';
    $dbName='msc';

    
if(self::$_dbInstance === null) {self:: $_dbInstance = new self($username, $password, $host, $dbName);

}

return self::$_dbInstance;

} 

public function __construct($username, $password, $host, $database) {
    try {
    $this->_dbHandle= new PDO("mysql:host=$host; dbname=$database", $username, $password); 
}
    catch (PDOException $e) { 
    echo $e->getMessage();
}
}
public function getdbConnection() {
    return $this->_dbHandle; 
}

public function __destruct() {
    $this->_dbHandle= null; 
}

}