<?php
/**
 * @version       $Id: 
 * @package       Matware
 * @subpackage    ExampleWebSocket
 * @copyright     Copyright (C) 1996 - 2014 Matware - All rights reserved.
 * @author        Matias Aguirre
 * @email         maguirre@matware.com.ar
 * @link          http://www.matware.com.ar/
 * @license       GNU/GPL http://www.gnu.org/licenses/gpl-2.0-standalone.html
 */

// Setup the base path related constant.
$ROOT = dirname(dirname(__FILE__)).'/joomla-cms.my';

// Ensure that required path constants are defined.
if (!defined('JPATH_LIBRARIES'))
{
	define('JPATH_LIBRARIES', $ROOT.'/libraries');
}
// Fire up the Platform importer.
if (file_exists(JPATH_LIBRARIES . '/import.php'))
{
	require JPATH_LIBRARIES . '/import.php';
}
// Import the Joomla! CMS
if (file_exists(JPATH_LIBRARIES.'/cms.php')) {
	require_once JPATH_LIBRARIES.'/cms.php';
}
// Ensure that required path constants are defined.
if (!defined('JPATH_SITE'))
{
	define('JPATH_SITE', $ROOT);
}
// Define cache path
if (!defined('JPATH_CACHE'))
{
	define('JPATH_CACHE', $ROOT.'/cache');
}

// Import the database libraries
jimport('joomla.database.database');
// Import the file libraries
jimport('joomla.filesystem.file');
// Import the html libraries
jimport('cms.html.html');

// Import the MWebSocket class from Matware libraries.
JLoader::register('MSocketDaemon', JPATH_LIBRARIES.'/matware/socket/daemon.php');
JLoader::register('MWebsocket', JPATH_LIBRARIES.'/matware/socket/websocket.php');
JLoader::register('MWebsocketUser', JPATH_LIBRARIES.'/matware/socket/websocket/user.php');

// Interfaces.
JLoader::register('MWebsocketController', JPATH_LIBRARIES.'/matware/socket/websocket/controller.php');
JLoader::register('MWebsocketHandshake', JPATH_LIBRARIES.'/matware/socket/websocket/handshake.php');
JLoader::register('MWebsocketProtocol', JPATH_LIBRARIES.'/matware/socket/websocket/protocol.php');

// Adapters.
JLoader::discover('MWebsocketHandshake', JPATH_LIBRARIES.'/matware/socket/websocket/handshakes');
JLoader::discover('MWebsocketProtocol', JPATH_LIBRARIES.'/matware/socket/websocket/protocols');

require __DIR__ . '/configuration.php';
