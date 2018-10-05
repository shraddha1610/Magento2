<?php
class Shraddha_CreateAdminController_Adminhtml_CustomController extends Mage_Adminhtml_Controller_Action

{

public function indexAction()

{

$this->loadLayout()

->_setActiveMenu('mycustomtab')

->_title($this->__('Index Action'));


$this->renderLayout();

}
public function listAction()

{

$this->loadLayout()

->_setActiveMenu('mycustomtab')

->_title($this->__('List Action'));

$this->renderLayout();

}

protected function _isAllowed()

{

return Mage::getSingleton('admin/session')->isAllowed('Shraddha_CreateAdminController/');

}

}
