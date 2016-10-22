<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/10/16
 * Time: 6:56 PM
 */

class Herfox_SalesForce_Model_Observer
{
    public function syncProducts()
    {
        $session = Mage::getModel('herfox_salesforce/config')->getSession();
        $LastModifiedDate = "2016-01-01T00:00:00.000Z";
        $IsActive = true;
        $IsDelete = false;

        $url = $session['instance_url'] . "/services/apexrest/PricebookEntry?"
            . "LastModifiedDate=" . $LastModifiedDate;
        // . "&IsActive=" . $IsActive
        // . "&IsDelete=" . $IsDelete;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $session['access_token']));

        $json_response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($json_response, true);
        Mage::log($response, null, "salesforce_response.log");

        //$total_size = $response['totalSize'];
        /*
            echo "<pre>";
            var_dump($response);
            echo "</pre>";
        */
        echo count($response) . " record(s) returned<br/><br/>";
        echo "<table border='1'>";
        echo "<tr><th>Id</th><th>Codigo Producto</th><th>Id Lista de Precios</th><th>Precio Unidad</th><th>Id Producto</th></tr>";
        foreach ((array) $response as $record) {
            echo "<tr><td>".$record['Id']."</td><td>".$record['ProductCode']."</td><td>".$record['Pricebook2Id']."</td><td>".$record['UnitPrice']."</td><td>".$record['Product2Id']."</td></tr>";
        }
        echo "</table>";
    }


}