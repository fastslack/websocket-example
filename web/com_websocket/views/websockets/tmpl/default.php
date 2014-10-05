<?php
/**
 * @version       $Id: 
 * @package       Matware
 * @subpackage    WebSocketExample
 * @copyright     Copyright (C) 1996 - 2014 Matware - All rights reserved.
 * @author        Matias Aguirre
 * @email         maguirre@matware.com.ar
 * @link          http://www.matware.com.ar/
 * @license       GNU/GPL http://www.gnu.org/licenses/gpl-2.0-standalone.html
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
 
// Load mootools behavior
JHtml::_('behavior.framework');

// get document to add scripts
$document	= JFactory::getDocument();
$document->addScript('components/com_websocket/js/websocket.js');
?>
<script>
	window.addEvent('load', function() {
		Socket = new WebSocketConnector();
	});
</script>
<table class="adminlist" border="0">
<tr>
	<td>
		<table width="100%" border="0">
		<tr>
			<td width="50%" align="right" valign="top">
				<?php echo JText::_('Client (You)'); ?><br />
				<textarea id="client" rows="10" cols="60">
					&nbsp;
				</textarea><br />
				<input id="command" type="text" style="padding: 3px;width: 200px; height: 16px;" onkeydown="if (event.keyCode == 13) return false;">
				&nbsp;&nbsp;<button id="button "type="button" onclick="Socket.send()" style="height: 30px;">Send!</button> 
			</td>
			<td width="50%" valign="top">
				<?php echo JText::_('Websocket Server'); ?><br />
				<textarea id="server" rows="10" cols="60">
					&nbsp;
				</textarea> 
			</td>
		</tr>
		<tr>
			<td width="100%" colspan="2" valign="top">
				<b>Commands:</b><br>&nbsp;&nbsp;'test' = Print text message<br>
&nbsp;&nbsp;'version' = Show the version of the Joomla! Platform
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
