<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/20/16
 * Time: 4:28 PM
 */

class Herfox_SalesForce_Model_Config
{
    public function getSession()
    {
        $token_url = Mage::getStoreConfig('herfox_salesforce/oauth2/login_uri') . "/services/oauth2/token";
        $params = "grant_type=" . Mage::getStoreConfig('herfox_salesforce/oauth2/grant_type')
            . "&client_id=" . Mage::getStoreConfig('herfox_salesforce/oauth2/client_id')
            . "&client_secret=" . Mage::getStoreConfig('herfox_salesforce/oauth2/client_secret')
            . "&username=" . Mage::getStoreConfig('herfox_salesforce/oauth2/username')
            . "&password=" . Mage::getStoreConfig('herfox_salesforce/oauth2/password');
        
        $curl = curl_init($token_url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 200 ) {
            $error = "Error: call to token URL $token_url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl);
            Mage::log($error, null, "sf_get_session.log");
            die;
        }

        curl_close($curl);

        $response = json_decode($json_response, true);
        // Mage::log($response, null, "sf_get_session.log");

        $access_token = $response['access_token'];
        $instance_url = $response['instance_url'];

        if (!isset($access_token) || $access_token == "") {
            $error = "Error - access token missing from response!";
            Mage::log($error, null, "sf_get_session.log");
            die;
        }

        if (!isset($instance_url) || $instance_url == "") {
            $error = "Error - instance URL missing from response!";
            Mage::log($error, null, "sf_get_session.log");
            die;
        }

        $session['access_token'] = $access_token;
        $session['instance_url'] = $instance_url;

        return $session;
    }
}