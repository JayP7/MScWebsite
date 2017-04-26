<?php

require_once('Models/InternationalData.php');
require_once('Models/Database.php');

class InternationalDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllInternational() {
   
    $sqlQuery="SELECT * FROM International";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new InternationalData ($row);
}
return $dataSet;
} 

}