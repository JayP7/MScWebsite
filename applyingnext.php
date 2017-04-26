<?php
require_once('Models/ApplyingNextDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Applying Next';
$applyingNextDataSet= new ApplyingNextDataSet();
$view->applyingNextDataSet= $applyingNextDataSet->fetchAllApplyingNext();
require_once('Views/applyingnext.phtml');