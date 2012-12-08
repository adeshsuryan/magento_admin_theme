<?php
/*
 * @category    Community
 * @package     AK_Admintheme
 * @Document    Observer.php
 * @Created on  Nov 1, 2012, 7:05 PM
 * @copyright   Copyright (c) 2012 adesh suryan (adeshsuryan.in)
 */

class AK_Admintheme_Controller_Observer
{
	//Event: adminhtml_controller_action_predispatch_start
	public function overrideTheme()
	{
		Mage::getDesign()->setArea('adminhtml')
			->setTheme((string)Mage::getStoreConfig('design/admin/theme'));
	}
}
