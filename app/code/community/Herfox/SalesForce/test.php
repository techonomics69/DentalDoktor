<?php
// Change current directory to the directory of current script

require_once '../../../../Mage.php';
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
//ini_set('display_errors', 1);
umask(0);
Mage::app();

$obj = Mage::getModel('herfox_salesforce/observer');
$obj->syncProducts();