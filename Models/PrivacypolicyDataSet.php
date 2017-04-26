<?php

require_once('Models/PrivacypolicyData.php');
require_once('Models/Database.php');

class PrivacypolicyDataSet {
    protected $_dbHandle, $_dbInstance;
    
     public function __construct() {
         
    $this->_dbInstance= Database::getInstance();
    $this->_dbHandle= $this->_dbInstance->getdbConnection();
} 

public function fetchAllPrivacypolicy() {
   
    $sqlQuery="SELECT * FROM Privacypolicy";

    $statement= $this->_dbHandle->prepare($sqlQuery);
    $statement->execute();
    $dataSet= [];
    
while ($row = $statement->fetch()) {
    $dataSet[] = new PrivacypolicyData ($row);
}
return $dataSet;
} 

}