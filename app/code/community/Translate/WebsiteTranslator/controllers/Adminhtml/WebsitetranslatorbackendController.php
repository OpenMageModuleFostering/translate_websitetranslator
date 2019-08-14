<?php
class Translate_WebsiteTranslator_Adminhtml_WebsitetranslatorbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
  {
    $this->loadLayout();
	  $this->_title($this->__("Translate.com Website Translator"));
	  $this->renderLayout();
  }
}
