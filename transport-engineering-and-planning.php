<?php
require_once('Models/TransportDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Transport Engineering and Planning';
$transportDataSet= new TransportDataSet();
$view->transportDataSet= $transportDataSet->fetchAllTransport();
require_once('Views/transport-engineering-and-planning.phtml');