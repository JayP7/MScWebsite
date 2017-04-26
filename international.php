<?php
require_once('Models/InternationalDataSet.php');
$view = new stdClass();
$view->pageTitle = 'International';
$internationalDataSet= new InternationalDataSet();
$view->internationalDataSet= $internationalDataSet->fetchAllInternational();
require_once('Views/international.phtml');