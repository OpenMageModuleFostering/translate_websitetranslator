<?php

$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('websitetranslator/websitetranslator'))
    ->addColumn('setting_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Id')
    ->addColumn('setting_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable'  => false,
      ), 'Name')
    ->addColumn('setting_value', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable'  => false,
      ), 'Value');
$installer->getConnection()->createTable($table);

$model = Mage::getModel('websitetranslator/websitetranslator');
$default_settings = array(
    'website_key' => '',
    'remember_language' => 'true',
    'guess_language' => 'true',
    'translate_meta' => 'true',
    'localize_images' => 'false',
    'localize_bg_images' => 'false',
    'localize_media' => 'false',
    'install' => 'false'
);

foreach ($default_settings as $setting_name => $setting_value)
{
  $model->setSettingName($setting_name);
  $model->setSettingValue($setting_value);
  $model->save();
  $model->unsetData();
}

$installer->endSetup();
