<?php
require_once('Models/AdvancedControlSystemsDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Advanced Control Systems';
$advancedControlSystemsDataSet= new AdvancedControlSystemsDataSet();
$view->advancedControlSystemsDataSet= $advancedControlSystemsDataSet->fetchAllAdvancedControlSystems();
require_once('Views/advanced-control-systems.phtml');