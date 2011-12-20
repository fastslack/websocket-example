<?php
/**
 * @version       $Id: 
 * @package       Matware
 * @subpackage    WebSocketExample
 * @copyright     Copyright (C) 1996 - 2011 Matware - All rights reserved.
 * @author        Matias Aguirre
 * @email         maguirre@matware.com.ar
 * @link          http://www.matware.com.ar/
 * @license       GNU/GPL http://www.gnu.org/licenses/gpl-2.0-standalone.html
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * WebSockets View
 */
class WebSocketViewWebSockets extends JView
{
	/**
	 * WebSockets view display method
	 * @return void
	 */
	function display($tpl = null) 
	{
		// Display the template
		parent::display($tpl);
	}
}
