<?php

require_once('Models/IndexData.php');
require_once('Models/Database.php');

class IndexDataSet {
     protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllIndex() {
   
    $sqlQuery="SELECT * FROM Home";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new IndexData ($row);
}
return $dataSet;
} 

}