<?php
/**
 * Herfox_SalesForce extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Herfox
 * @package        Herfox_SalesForce
 * @copyright      Copyright (c) 2016
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * SalesForce module install script
 *
 * @category    Herfox
 * @package     Herfox_SalesForce
 * @author      Ultimate Module Creator
 */
$this->startSetup();
$table = $this->getConnection()
    ->newTable($this->getTable('herfox_salesforce/prospect'))
    ->addColumn(
        'entity_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'identity'  => true,
            'nullable'  => false,
            'primary'   => true,
        ),
        'Prospecto ID'
    )
    ->addColumn(
        'customer_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'ID Cliente'
    )
    ->addColumn(
        'first_name',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Nombres'
    )
    ->addColumn(
        'last_name',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Apellidos'
    )
    ->addColumn(
        'document_type',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Tipo de Documento'
    )
    ->addColumn(
        'document_number',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Número de Documento'
    )
    ->addColumn(
        'birthdate',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Fecha de nacimiento'
    )
    ->addColumn(
        'mobile',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Celular'
    )
    ->addColumn(
        'email_type',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Tipo de Correo'
    )
    ->addColumn(
        'email',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Correo electrónico'
    )
    ->addColumn(
        'password',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Clave'
    )
    ->addColumn(
        'company',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Compañía'
    )
    ->addColumn(
        'industry',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Especialidad'
    )
    ->addColumn(
        'area',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Área'
    )
    ->addColumn(
        'title',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Cargo'
    )
    ->addColumn(
        'phone',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Teléfono'
    )
    ->addColumn(
        'fax',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Fax'
    )
    ->addColumn(
        'website',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Sitio Web'
    )
    ->addColumn(
        'country_code',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Código país'
    )
    ->addColumn(
        'state_code',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Código región'
    )
    ->addColumn(
        'city',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Ciudad'
    )
    ->addColumn(
        'locality',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Localidad'
    )
    ->addColumn(
        'street',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Dirección'
    )
    ->addColumn(
        'zip',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Código postal'
    )
    ->addColumn(
        'lead_source',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(),
        'Como se enteró'
    )
    ->addColumn(
        'dentaldoktor',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Proviene de Web DentalDoktor'
    )
    ->addColumn(
        'habeas_data',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Autoriza Habeas Data'
    )
    ->addColumn(
        'status',
        Varien_Db_Ddl_Table::TYPE_SMALLINT, null,
        array(),
        'Enabled'
    )
    ->addColumn(
        'updated_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Prospecto Modification Time'
    )
    ->addColumn(
        'created_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Prospecto Creation Time'
    ) 
    ->setComment('Prospecto Table');
$this->getConnection()->createTable($table);
$table = $this->getConnection()
    ->newTable($this->getTable('herfox_salesforce/product'))
    ->addColumn(
        'entity_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'identity'  => true,
            'nullable'  => false,
            'primary'   => true,
        ),
        'Producto ID'
    )
    ->addColumn(
        'name',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Nombre'
    )
    ->addColumn(
        'total',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Procesados'
    )
    ->addColumn(
        'success',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Exitosos'
    )
    ->addColumn(
        'unsuccess',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'No exitosos'
    )
    ->addColumn(
        'errors',
        Varien_Db_Ddl_Table::TYPE_TEXT, '64k',
        array(),
        'Errores'
    )
    ->addColumn(
        'status',
        Varien_Db_Ddl_Table::TYPE_SMALLINT, null,
        array(),
        'Enabled'
    )
    ->addColumn(
        'updated_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Producto Modification Time'
    )
    ->addColumn(
        'created_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Producto Creation Time'
    ) 
    ->setComment('Producto Table');
$this->getConnection()->createTable($table);
$table = $this->getConnection()
    ->newTable($this->getTable('herfox_salesforce/price'))
    ->addColumn(
        'entity_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'identity'  => true,
            'nullable'  => false,
            'primary'   => true,
        ),
        'Precio ID'
    )
    ->addColumn(
        'name',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Nombre'
    )
    ->addColumn(
        'total',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Procesados'
    )
    ->addColumn(
        'success',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Exitosos'
    )
    ->addColumn(
        'unsuccess',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'No exitosos'
    )
    ->addColumn(
        'errors',
        Varien_Db_Ddl_Table::TYPE_TEXT, '64k',
        array(),
        'Errores'
    )
    ->addColumn(
        'status',
        Varien_Db_Ddl_Table::TYPE_SMALLINT, null,
        array(),
        'Enabled'
    )
    ->addColumn(
        'updated_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Precio Modification Time'
    )
    ->addColumn(
        'created_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Precio Creation Time'
    ) 
    ->setComment('Precio Table');
$this->getConnection()->createTable($table);
$table = $this->getConnection()
    ->newTable($this->getTable('herfox_salesforce/discount'))
    ->addColumn(
        'entity_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'identity'  => true,
            'nullable'  => false,
            'primary'   => true,
        ),
        'Descuento ID'
    )
    ->addColumn(
        'name',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Nombre'
    )
    ->addColumn(
        'total',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Procesados'
    )
    ->addColumn(
        'success',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'Exitosos'
    )
    ->addColumn(
        'unsuccess',
        Varien_Db_Ddl_Table::TYPE_INTEGER, null,
        array(
            'nullable'  => false,
            'unsigned'  => true,
        ),
        'No exitosos'
    )
    ->addColumn(
        'errors',
        Varien_Db_Ddl_Table::TYPE_TEXT, '64k',
        array(),
        'Errores'
    )
    ->addColumn(
        'status',
        Varien_Db_Ddl_Table::TYPE_SMALLINT, null,
        array(),
        'Enabled'
    )
    ->addColumn(
        'updated_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Descuento Modification Time'
    )
    ->addColumn(
        'created_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array(),
        'Descuento Creation Time'
    ) 
    ->setComment('Descuento Table');
$this->getConnection()->createTable($table);

$this->run("
ALTER TABLE `{$this->getTable('sales/quote_payment')}` ADD `way_to_pay` VARCHAR( 255 ) NOT NULL;
ALTER TABLE `{$this->getTable('sales/order_payment')}` ADD `way_to_pay` VARCHAR( 255 ) NOT NULL;
");

$this->endSetup();
