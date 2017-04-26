<?php

require_once('Models/StructuralEngineeringData.php');
require_once('Models/Database.php');

class StructuralEngineeringDataSet {
   protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllStructuralEngineering() {
   
    $sqlQuery="SELECT * FROM Structural_Engineering";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new StructuralEngineeringData ($row);
}
return $dataSet;
} 

}