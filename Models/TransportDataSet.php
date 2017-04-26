<?php

require_once('Models/TransportData.php');
require_once('Models/Database.php');

class TransportDataSet {
  protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllTransport() {
   
    $sqlQuery="SELECT * FROM Transport";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new TransportData ($row);
}
return $dataSet;
} 

}