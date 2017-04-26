<?php

require_once('Models/AerospaceData.php');
require_once('Models/Database.php');

class AerospaceDataSet {
     protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllAerospace() {
   
    $sqlQuery="SELECT * FROM Aerospace";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new AerospaceData ($row);
}
return $dataSet;
} 

}
