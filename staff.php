<?php 
require_once('Models/StaffDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Staff';
$staffDataSet= new StaffDataSet();
$view->staffDataSet= $staffDataSet->fetchAllStaff();

if (isset($_POST['fullname'])){
    $staffDataSet= new StaffDataSet();
$view->staffDataSet= $staffDataSet->fetchAllStaffByName($_POST['fullname']);
} 

require_once('Views/staff.phtml');

