<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/14/16
 * Time: 6:42 PM
 */

session_start();

function show_prices($instance_url, $access_token)
{
    $LastModifiedDate = "2016-01-01T12:21:58.000Z";
    $IsActive = true;
    $IsDelete = false;

    $url = $instance_url . '/services/apexrest/PricebookEntry?LastModifiedDate=' . $LastModifiedDate;
       // . "&IsActive=" . $IsActive
       // . "&IsDelete=" . $IsDelete;

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $access_token));

    $json_response = curl_exec($curl);
    curl_close($curl);

    $response = json_decode($json_response, true);

    //$total_size = $response['totalSize'];
/*
    echo "<pre>";
    var_dump($response);
    echo "</pre>";
*/
    echo count($response) . " record(s) returned<br/><br/>";
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Codigo Producto</th><th>Id Lista de Precios</th><th>Precio Unidad</th><th>Id Producto</th><th>Estandar</th></tr>";
    foreach ((array) $response as $record) {
        echo "<tr><td>".$record['Id']."</td><td>".$record['ProductCode']."</td><td>".$record['Pricebook2Id']."</td><td>".$record['UnitPrice']."</td><td>".$record['Product2Id']."</td><td>".$record['Pricebook2']["IsStandard"]."</td></tr>";
    }
    echo "</table>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>REST/OAuth Listar Precios</title>
</head>
<body>
<a href="../servicios.php">Regresar</a>
<h1>Lista de Precios</h1>
<tt>
    <?php
    $access_token = $_SESSION['access_token'];
    $instance_url = $_SESSION['instance_url'];

    if (!isset($access_token) || $access_token == "") {
        die("Error - access token missing from session!");
    }

    if (!isset($instance_url) || $instance_url == "") {
        die("Error - instance URL missing from session!");
    }

    show_prices($instance_url, $access_token);
    ?>
</tt>
</body>
</html>
