<?php

require_once('Models/PetroleumGasData.php');
require_once('Models/Database.php');

class PetroleumGasDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllPetroleumGas() {
   
    $sqlQuery="SELECT * FROM Petroleum_Gas";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new PetroleumGasData ($row);
}
return $dataSet;
} 

}