<?php

require_once('Models/FoiData.php');
require_once('Models/Database.php');

class FOIDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllFOI() {
   
    $sqlQuery="SELECT * FROM FOI";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new FoiData ($row);
}
return $dataSet;
} 

}