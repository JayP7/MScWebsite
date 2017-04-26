<?php

require_once('Models/DwbsData.php');
require_once('Models/Database.php');

class DwbsDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAlldwbs() {
   
    $sqlQuery="SELECT * FROM dwbs";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new DwbsData ($row);
}
return $dataSet;
} 

}