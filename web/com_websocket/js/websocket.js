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

var WebSocketConnector = new Class({
	uri:    null,
	client: null,
	server: null,

	/**
	 * Initialize
	 */
	initialize: function() {

		// WebSocket URL
		this.uri = "ws://127.0.0.1:8080/";
		// Client and server logs textarea's 
		this.client = $('client');
		this.server = $('server');

		// Clean logs textarea's 
		this.client.set('value', '');
		this.server.set('value', '');

		if (typeof MozWebSocket != "undefined" || "WebSocket" in window) {
			this.clientLog('Checking: WebSocket available');

			try {

				if (window.WebSocket) { // (window.MozWebSocket)
					this.socket = new WebSocket(this.uri);
				} else if (typeof MozWebSocket != "undefined") {
					this.socket = new MozWebSocket(this.uri);
				}
			
				this.socket.onopen = function() {
					this.serverLog('Socket opening: '+this.socket.readyState);
				}.bind(this);
				
				this.socket.onmessage = function(message) {

					// Log on server textarea
					this.serverLog('Receive: '+message.data);

				}.bind(this);
				
				this.socket.onclose = function() {
					this.serverLog('Socket closing: '+this.socket.readyState);
				}.bind(this);
			} catch (exception) {
				this.serverLog('Error: '.exception);
			}
		} else {
			this.clientLog('Error: No WebSocket available');
		}
	},

	/**
	 * Append a log message to the log textarea.
	 * 
	 * @param  string  The message.
	 */
	clientLog: function(message) {
		if (this.client) {
			html = this.client.get('value').trim();
			if (html) {
				html += "\n";
			}
			this.client.set('value', html + message);
		}
	},

	/**
	 * Append a log message to the log textarea.
	 * 
	 * @param  string  The message.
	 */
	serverLog: function(message) {
		if (this.server) {
			html = this.server.get('value').trim();
			if (html) {
				html += "\n";
			}
			this.server.set('value', html + message);
		}
	},

	/**
	 * Send the message
	 * 
	 * @param  string  The message.
	 */
	send: function(message) {

		var message = $('command').get('value');

		try {
			this.socket.send(message);
			this.clientLog('Sending: '+message);
		} catch (exception) {
			this.clientLog('Error: '.exception);
		}
	}
});
