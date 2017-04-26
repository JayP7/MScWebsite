<?php
require_once('Models/NetworksDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Data Telecommunications Networks';
$networksDataSet= new NetworksDataSet();
$view->networksDataSet= $networksDataSet->fetchAllNetworks();
require_once('Views/data-telecommunications-networks.phtml');