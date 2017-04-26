<?php

require_once('Models/ApplyingNextData.php');
require_once('Models/Database.php');

class ApplyingNextDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllApplyingNext() {
   
    $sqlQuery="SELECT * FROM ApplyingNext";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new ApplyingNextData ($row);
}
return $dataSet;
} 

}