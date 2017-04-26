<?php

require_once('Models/AboutData.php');
require_once('Models/Database.php');

class AboutDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllAbout() {
   
    $sqlQuery="SELECT * FROM About";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new AboutData ($row);
}
return $dataSet;
} 

}