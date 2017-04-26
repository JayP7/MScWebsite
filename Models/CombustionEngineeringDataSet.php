<?php

require_once('Models/CombustionEngineeringData.php');
require_once('Models/Database.php');

class CombustionEngineeringDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllCombustionEngineering() {
   
    $sqlQuery="SELECT * FROM Combustion_Engineering";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new CombustionEngineeringData ($row);
}
return $dataSet;
} 

}