<?php

require_once('Models/NetworksData.php');
require_once('Models/Database.php');

class NetworksDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllNetworks() {
   
    $sqlQuery="SELECT * FROM Data_Telecommunications";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new NetworksData ($row);
}
return $dataSet;
} 

}