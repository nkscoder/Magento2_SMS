<?php

namespace Nitesh\Sms\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 *
 * @package Nitesh\Post\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install Blog Posts table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('nitesh_sms');
        


        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'sms_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'ID'
                )
                ->addColumn(
                    'sms_provider',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Sms Provider'
                )
                ->addColumn(
                    'sms_api_key',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => true],
                    'Sms Api Key'
                )
                ->addColumn(
                    'sms_sender',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => true],
                    'Sms Sender'
                )
                ->addColumn(
                    'sms_message',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => true],
                    'Sms Message'
                )

     

                ->addColumn(
                    'sms_status',
                    Table::TYPE_TEXT,
                    null,
                    [

                        'nullable' => false,
                        'default' => 'Active'

                    ],
                    'Sms Status'
                        )


                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Created At'
                )


                ->setComment('Sms');
            $setup->getConnection()->createTable($table);
        }

        





        $setup->endSetup();
    }
}
