<?php
/**
 * @version       $Id: 
 * @package       Matware
 * @subpackage    ExampleWebSocket
 * @copyright     Copyright (C) 1996 - 2011 Matware - All rights reserved.
 * @author        Matias Aguirre
 * @email         maguirre@matware.com.ar
 * @link          http://www.matware.com.ar/
 * @license       GNU/GPL http://www.gnu.org/licenses/gpl-2.0-standalone.html
 */

/*
 * Change the following path to suit where you have cloned or installed the Joomla Platform repository.
 * The default setting assumes you have the joomla platform and examples folder at the same level.
 */

// Setup the base path related constant.
define('JPATH_BASE', dirname(__FILE__));
define('JPATH_SITE', dirname(__FILE__));
define('JPATH_ROOT', dirname(__FILE__));
define('JPATH_LIBRARIES', dirname(dirname(__FILE__)).'/joomla-platform/libraries' );

// Import the Joomla! Platform
require JPATH_LIBRARIES.'/import.php';

// Import the JCli class from the platform.
jimport('joomla.application.cli');
// Import the JDatabase class
jimport('joomla.database.database');
// Import the JLog class
jimport('joomla.error.log');

// Import the JWebSocket class from the platform.
require JPATH_LIBRARIES.'/joomla/socket/websocket.php';

// Get config value
$config = JFactory::getConfig('./configuration.php');
// Define debug
define('JDEBUG', $config->get('debug'));
