<?php
class Translate_WebsiteTranslator_Model_Mysql4_Websitetranslator extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("websitetranslator/websitetranslator", "setting_id");
    }
}
