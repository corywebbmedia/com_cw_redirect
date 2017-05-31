<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

 // No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View class for CW Redirect.
 */
class CwredirectViewRedirect extends JViewLegacy
{
	/**
	 * Display the view
	 *
	 * @param   string  $tpl  Template name
	 *
	 * @return void
	 *
	 * @throws Exception
	 */
	public function display($tpl = null)
	{
		$app = JFactory::getApplication();

		$this->params     = $app->getParams('com_cw_redirect');
		$this->redirect   = $this->params->get('redirect');

		header('Location: '. $this->redirect, true, 301);

		exit();
	}

}
