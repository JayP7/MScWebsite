<?php
require_once('Models/AccessibilityDataSet.php');
$view = new stdClass();
$view->pageTitle = 'Accessibility';
$accessibilityDataSet= new AccessibilityDataSet();
$view->accessibilityDataSet= $accessibilityDataSet->fetchAllAccessibility();
require_once('Views/accessibility.phtml');