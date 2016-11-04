<?php
/**
 * Created by PhpStorm.
 * User: Herfox
 * Date: 10/10/16
 * Time: 6:56 PM
 */

class SalesForce_WebToLead_Model_Observer
{
    public function createCase($contact_event)
    {
        $contact = $contact_event->getData();
        $contact = $contact['controller_action']->getRequest()->getPost();

        // General Data
        $case = [
            "orgid" => "00DP0000003ooje",
            "retURL" => "http://dentaldoktor.sinatsys.com/SalesForce/testpost.php",
            "name" => $contact['name'],
            "email" => $contact['email'],
            "phone" => $contact['telephone'],
            "subject" => $contact['subject'],
            "description" => $contact['comment'],
            "reason" => $contact['reason'],
            "type" => $contact['type']
        ];

        // Mage::log($case, null, "sf_cases.log");

        // Call to Web To Lead of SalesForce
        $_config = array(
            'maxredirects' => 5,
            'timeout'    => 30
        );

        $client = new Varien_Http_Client();
        $result = new Varien_Object();

        $client->setUri('https://test.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8')
            ->setConfig($_config)
            ->setMethod(Varien_Http_Client::POST)
            ->setParameterPost($case);

        try{
            $response = $client->request();
            if ($response->isSuccessful())
            {
                //echo('<pre>');
                //var_dump($response->getBody());
                //echo('</pre>');
                // Mage::log($response->getBody(), null, "sf_cases.log");
            }
        }
        catch (Exception $e) {
            $result->setResponseCode(-1)
                ->setResponseReasonCode($e->getCode())
                ->setResponseReasonText($e->getMessage());
            $debugData['result'] = $result->getData();
            Mage::log("Error: ".$debugData, null, "sf_cases.log");
            throw $e;
        }

        return;
    }

    public function createProspect($customer)
    {
        if (!($customer instanceof Mage_Customer_Model_Customer)) {
            if ($customer->getCustomer()) {
                $customer = $customer->getCustomer();
            }
        }

        // General Data
        $lead["oid"] = "00DP0000003ooje";
        $lead["retURL"] = "http://dentaldoktor.sinatsys.com/SalesForce/testpost.php";
        $lead["00NP0000000zglf"] = $data["dentaldoktor"] = 1;
        $lead["00NP0000001A5NI"] = $customer->entity_id;

        // Customer
        $document_type = Mage::getModel('eav/config')->getAttribute('customer','document_type')->getSource()->getOptionText($customer->document_type);
        $email_type = Mage::getModel('eav/config')->getAttribute('customer','email_type')->getSource()->getOptionText($customer->email_type);
        $lead_source = Mage::getModel('eav/config')->getAttribute('customer','lead_source')->getSource()->getOptionText($customer->lead_source);

        $lead["first_name"] = $data["first_name"] = $customer->firstname;
        $lead["last_name"] = $data["last_name"] = $customer->lastname;
        $lead["00NP0000000zfGl"] = $data["document_type"] = $document_type;
        $lead["00NP0000000zfK9"] = $data["document_number"] = $customer->document_number;
        $lead["00NP0000000zgdb"] = $data["birthdate"] = explode(" ", $customer->dob)[0];
        $lead["mobile"] = $data["mobile"] = $customer->mobile;
        $lead["00NP0000000zfHK"] = $data["email_type"] = $email_type;
        $lead["email"] = $data["email"] = $customer->email;
        $lead["00NP00000019r2a"] = $data["password"] = $customer->password;
        $lead["lead_source"] = $data["lead_source"] = $lead_source;
        $lead["00NP0000000zfLR"] = $data["habeas_data"] = $customer->habeas_data;

        // Customer Address
        foreach ($customer->getAddresses() as $address)
        {
            $region = Mage::getModel('directory/region')->load($address->region_id)->getCode();
            $industry = Mage::getModel('eav/config')->getAttribute('customer_address', 'industry')->getSource()->getOptionText($address->industry);
            $locality = Mage::getModel('eav/config')->getAttribute('customer_address', 'locality')->getSource()->getOptionText($address->locality);

            $lead["company"] = $data["company"] = $address->company;
            $lead["industry"] = $data["industry"] = $industry;
            $lead["00NP00000019sFL"] = $data["area"] = $address->area;
            $lead["title"] = $data["title"] = $address->title;
            $lead["phone"] = $data["phone"] = $address->telephone;
            $lead["fax"] = $data["fax"] = "";
            $lead["URL"] = $data["website"] = $address->website;
            $lead["country_code"] = $data["country_code"] = $address->country_id;
            $lead["state_code"] = $data["state_code"] = $region;
            $lead["city"] = $data["city"] = $address->city;
            $lead["00NP00000014QcS"] = $data["locality"] = $locality;
            $lead["street"] = $data["street"] = $address->street;
            $lead["zip"] = $data["zip"] = $address->postcode;
        }
/*
        echo('<pre>');
        var_dump($lead);
        echo('</pre>');
*/
        //Mage::log($lead, null, "prospects.log");

        // Call to Web To Lead of SalesForce
        $_config = array(
            'maxredirects' => 5,
            'timeout'    => 30
        );

        $client = new Varien_Http_Client();
        $result = new Varien_Object();

        $client->setUri('https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8')
            ->setConfig($_config)
            ->setMethod(Varien_Http_Client::POST)
            ->setParameterPost($lead);

        try{
            $response = $client->request();
            if ($response->isSuccessful())
            {
                //$data['response'] = $response->getBody();
                $data['response'] = $customer->entity_id;
                $data["status"] = 1;

                //echo('<pre>');
                //var_dump($response->getBody());
                //echo('</pre>');
                //Mage::log($response->getBody(), null, "herfox_test.log");
            }
        }
        catch (Exception $e) {
            $result->setResponseCode(-1)
                ->setResponseReasonCode($e->getCode())
                ->setResponseReasonText($e->getMessage());
            $data['response'] = $debugData['result'] = $result->getData();
            Mage::log("Error: ".$debugData, null, "sf_prospects.log");
            throw $e;
        }

        // Register in Prospects Module
        $prospect = Mage::getModel('salesforce_webtolead/prospecto');
        Mage::register('current_prospecto', $prospect);
        $prospect->addData($data);
        $prospect->save();

        return;
    }

    /**
     * Convert dates in array from localized to internal format
     *
     * @param   array $array
     * @param   array $dateFields
     * @return  array
     */
    protected function _filterDates($array, $dateFields)
    {
        if (empty($dateFields)) {
            return $array;
        }
        $filterInput = new Zend_Filter_LocalizedToNormalized(array(
            'date_format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT)
        ));
        $filterInternal = new Zend_Filter_NormalizedToLocalized(array(
            'date_format' => Varien_Date::DATE_INTERNAL_FORMAT
        ));

        foreach ($dateFields as $dateField) {
            if (array_key_exists($dateField, $array) && !empty($dateField)) {
                $array[$dateField] = $filterInput->filter($array[$dateField]);
                $array[$dateField] = $filterInternal->filter($array[$dateField]);
            }
        }
        return $array;
    }
}