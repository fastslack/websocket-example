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
// Prevent direct access to this file outside of a calling application.
defined('_JEXEC') or die;

/**
* WebSocketExample configuration class.
*
* @package Matware
* @since 13.1
*/
final class JConfig
{
	/**
	* Cli flag
	*
	* @var string
	* @since 13.1
	*/
	public $cli = 1;
	/**
	* The database driver.
	*
	* @var string
	* @since 13.1
	*/
	public $dbtype = 'mysql';

	/**
	* Database host.
	*
	* @var string
	* @since 13.1
	*/
	public $host = 'localhost';

	/**
	* The database connection user.
	*
	* @var string
	* @since 11.3
	*/
	public $user = '';

	/**
	* The database connection password.
	*
	* @var string
	* @since 13.1
	*/
	public $password = '';

	/**
	* The database name.
	*
	* @var string
	* @since 13.1
	*/
	public $db = '';

	/**
	* The database table prefix, if necessary.
	*
	* @var string
	* @since 11.3
	*/
	public $dbprefix = 'jos_';

	/**
	* Debug
	*
	* @var string
	* @since 13.1
	*/
	public $debug = 1;

}
