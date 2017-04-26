<?php
require_once('Models/RoboticsAutomationDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Robotics and Automation';
$roboticsAutomationDataSet= new RoboticsAutomationDataSet();
$view->roboticsAutomationDataSet= $roboticsAutomationDataSet->fetchAllRoboticsAutomation();
require_once('Views/robotics-and-automation.phtml');