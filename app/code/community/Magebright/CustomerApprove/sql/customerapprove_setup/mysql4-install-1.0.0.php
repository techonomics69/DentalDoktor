<?php
$installer = $this;
$installer->startSetup();
$customerTable = $installer->getTable('customer_entity');
$connection = $this->getConnection();
$connection->addColumn($customerTable, 'mp_cc_is_approved', "TINYINT(1) UNSIGNED NOT NULL DEFAULT '0'");
$installer->run("
	UPDATE `{$this->getTable('customer_entity')}` SET `mp_cc_is_approved` = '1';
");

$connection->insert($installer->getTable('cms/page'), array(
    'title'             => 'Your account approved shortly',
    'root_template'     => 'one_column',
    'identifier'        => 'account-awaiting-approval',
    'content'           => "<div class=\"page-title\">\r\n        <h1><a name=\"top\"></a>Your account is awaiting approval</h1>\r\n    </div>\r\n    <p>Your account has been created but needs to be approved by an administrator.</p>\r\n<p>An e-mail will be sent to the e-mail address you used when you registered this account once it has been approved.</p>\r\n<p>Thank you.</p>",
    'creation_time'     => now(),
    'update_time'       => now(),
));

$connection->insert($installer->getTable('cms/page_store'), array(
    'page_id'   => $connection->lastInsertId(),
    'store_id'  => 0
));

$installer->endSetup();
