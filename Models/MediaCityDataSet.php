<?php

require_once('Models/MediaCityData.php');
require_once('Models/Database.php');

class MediaCityDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllMediaCity() {
   
    $sqlQuery="SELECT * FROM MediaCity";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new MediaCityData ($row);
}
return $dataSet;
} 

}