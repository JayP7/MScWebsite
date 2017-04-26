<?php

require_once('Models/AccessibilityData.php');
require_once('Models/Database.php');

class AccessibilityDataSet {
   protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllAccessibility() {
   
    $sqlQuery="SELECT * FROM Accessibility";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new AccessibilityData ($row);
}
return $dataSet;
} 

}