<?php

require_once('Models/TaughtDegreesData.php');
require_once('Models/Database.php');

class TaughtDegreesDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllTaughtDegrees() {
   
    $sqlQuery="SELECT * FROM TaughtDegrees";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new TaughtDegreesData ($row);
}
return $dataSet;
} 

}