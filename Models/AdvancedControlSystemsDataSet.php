<?php

require_once('Models/AdvancedControlSystemsData.php');
require_once('Models/Database.php');

class AdvancedControlSystemsDataSet {
  protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllAdvancedControlSystems() {
   
    $sqlQuery="SELECT * FROM Advanced_Control_Systems";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new AdvancedControlSystemsData ($row);
}
return $dataSet;
} 

}