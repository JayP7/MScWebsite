<?php

require_once('Models/GasEngineeringData.php');
require_once('Models/Database.php');

class GasEngineeringDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllGasEngineering() {
   
    $sqlQuery="SELECT * FROM Gas_Engineering";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new GasEngineeringData ($row);
}
return $dataSet;
} 

}