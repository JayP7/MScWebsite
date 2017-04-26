<?php

require_once('Models/StaffData.php');
require_once('Models/Database.php');

class StaffDataSet {

    protected $_dbHandle, $_dbInstance;

    public function __construct() {

        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllStaff() {

        $sqlQuery = 'SELECT * FROM Staff';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];

        while ($row = $statement->fetch()) {
            $dataSet[] = new StaffData($row);
        }
        return $dataSet;
    }

    public function fetchAllStaffByName() {

        $sqlQuery = "SELECT * FROM Staff WHERE full_name LIKE '%" . $_POST['fullname'] . "%' OR course  LIKE '%" . $_POST['fullname'] . "%' OR email  LIKE '%" . $_POST['fullname'] . "%' OR telephone  LIKE '%" . $_POST['fullname'] . "%'";

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];

        while ($row = $statement->fetch()) {
            $dataSet[] = new StaffData($row);
        }
        return $dataSet;
    }

}