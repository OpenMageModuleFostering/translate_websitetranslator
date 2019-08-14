<?php
class Translate_WebsiteTranslator_Adminhtml_WebsitetranslatorgetstartedController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
  {
    $this->loadLayout();
	  $this->_title($this->__("Website Translator"));
	  $this->renderLayout();
  }
}
