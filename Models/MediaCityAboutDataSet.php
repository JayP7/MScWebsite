<?php

require_once('Models/MediaCityAboutData.php');
require_once('Models/Database.php');


class MediaCityAboutDataSet {
     protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllMediaCityAbout() {
   
    $sqlQuery="SELECT * FROM MediaCityAbout";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new MediaCityAboutData ($row);
}
return $dataSet;
} 

}