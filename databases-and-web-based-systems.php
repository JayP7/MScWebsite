<?php
require_once('Models/DwbsDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Database and Web-Based System';
$dwbsDataSet= new DwbsDataSet();
$view->dwbsDataSet= $dwbsDataSet->fetchAlldwbs();
require_once('Views/databases-and-web-based-systems.phtml');