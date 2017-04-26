<?php

require_once('Models/AudioProductionData.php');
require_once('Models/Database.php');

class AudioProductionDataSet {
     protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllAudioProduction() {
   
    $sqlQuery="SELECT * FROM Audio_Production";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new AudioProductionData ($row);
}
return $dataSet;
} 

}