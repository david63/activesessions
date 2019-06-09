<?php
/**
*
* @package Active Sessions Extension
* @copyright (c) 2015 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACTIVE_SESSIONS_EXPLAIN'	=> 'Here is a list of the current active sessions on the board.<br><br>Click on “Session IP” to expand IP details.<br>Click on “Session ID” to expand session details.',
	'ADMIN_USER'				=> 'Admin user',
	'ALL'						=> 'All',
	'AUTO_LOGIN'				=> 'Auto login set',

	'BROWSER'					=> 'Browser type',

	'CLEAR_FILTER'				=> 'Clear filter',

	'FILTER_BY'					=> 'Filter Username by',
	'FILTER_USERNAME'			=> 'Username',

	'LAST_VISIT'				=> 'User’s last visit',

	'NEW_VERSION'				=> 'New Version',
	'NEW_VERSION_EXPLAIN'		=> 'There is a newer version of this extension available.',
	'NO_SESSION_DATA'			=> 'There is no session data available for this request.',

	'OTHER'						=> 'Other',

	'SESSION_FORWARD_FOR'		=> 'Session forwarded for',
	'SESSION_IP'				=> 'Session IP',
	'SESSION_ID'				=> 'Session ID',
	'SESSION_START'				=> 'Session start',
	'SESSION_TIME'				=> 'Session time',
	'SESSION_VIEWONLINE'		=> 'View online',

	'TOTAL_SESSIONS'			=> 'Total session count : <strong>%1$s</strong>',

	'USER_PAGE'					=> 'Last page visited',
	
	'VERSION'					=> 'Version',

	// Translators - set these to whatever is most appropriate in your language
	// These are used to populate the filter keys
	'START_CHARACTER'		=> 'A',
	'END_CHARACTER'			=> 'Z',
));

// Donate
$lang = array_merge($lang, array(
	'DONATE'					=> 'Donate',
	'DONATE_EXTENSIONS'			=> 'Donate to my extensions',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'This extension, as with all of my extensions, is totally free of charge. If you have benefited from using it then please consider making a donation by clicking the PayPal donation button opposite - I would appreciate it. I promise that there will be no spam nor requests for further donations, although they would always be welcome.',

	'PAYPAL_BUTTON'				=> 'Donate with PayPal button',
	'PAYPAL_TITLE'				=> 'PayPal - The safer, easier way to pay online!',
));
