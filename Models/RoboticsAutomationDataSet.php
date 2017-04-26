<?php

require_once('Models/RoboticsAutomationData.php');
require_once('Models/Database.php');

class RoboticsAutomationDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllRoboticsAutomation() {
   
    $sqlQuery="SELECT * FROM Robotics_Automation";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new RoboticsAutomationData ($row);
}
return $dataSet;
} 

}