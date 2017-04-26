<?php
require_once('Models/IndexDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Home';
$indexDataSet= new IndexDataSet();
$view->indexDataSet= $indexDataSet->fetchAllIndex();
require_once('Views/index.phtml');