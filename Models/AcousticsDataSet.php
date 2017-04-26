<?php

require_once('Models/AcousticsData.php');
require_once('Models/Database.php');

class AcousticsDataSet {
     protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllAcoustics() {
   
    $sqlQuery="SELECT * FROM Acoustics";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new AcousticsData ($row);
}
return $dataSet;
} 

}