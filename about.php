<?php
require_once('Models/AboutDataSet.php');
$view = new stdClass();
$view->pageTitle = 'About';
$aboutDataSet= new AboutDataSet();
$view->aboutDataSet= $aboutDataSet->fetchAllAbout();
require_once('Views/about.phtml');