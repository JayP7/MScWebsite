<?php

require_once('Models/ApplyingData.php');
require_once('Models/Database.php');

class ApplyingDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllApplying() {
   
    $sqlQuery="SELECT * FROM Applying";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new ApplyingData ($row);
}
return $dataSet;
} 

}