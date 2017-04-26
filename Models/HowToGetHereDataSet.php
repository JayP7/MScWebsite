<?php

require_once('Models/HowToGetHereData.php');
require_once('Models/Database.php');

class HowToGetHereDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllHowToGetHere() {
   
    $sqlQuery="SELECT * FROM Howtogethere";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new HowToGetHereData ($row);
}
return $dataSet;
} 

}