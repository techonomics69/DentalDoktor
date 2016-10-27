<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'app/Mage.php';
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
/*
$image = file_get_contents('http://dev-portalbellefarma.cs4.force.com/productos/servlet/rtaImage?eid=01tP0000001pRy7&feoid=00NP00000013mXI&refid=0EMP00000000E64');
$filename = "prueba.jpeg";
echo $url = Mage::getBaseDir('media') . DS . 'import'. DS . $filename;
echo "<br>".file_put_contents($url, $image);
*/

$obj = Mage::getModel('herfox_salesforce/observer');
$obj->sync();

//$obj->syncPriceRules();