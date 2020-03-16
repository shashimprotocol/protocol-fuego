<?php
/**
  * Hola.
  * This is the primary configuration file for OpenFuego.
  * You must edit the values below before getting started.
  * You should not need to edit any other files.
  *
  * OpenFuego requires PHP >= 5.3.0 and MySQL 5.
  * Only POSIX operating systems (not Windows) are supported.
  * This program must be run from a command line.
  *
  * @author Andrew Phelps <andrew@phel.ps>
  * @version 1.0
  */

namespace OpenFuego;

/* Your time zone. Harvard time is 'America/New_York'.
 * http://php.net/manual/en/timezones.php
**/
date_default_timezone_set('America/New_York');
	
/** Time to curate.
  * Specify the authorities at the center of the universe.
  * Minimum 1, maximum 15. No @ symbol necessary.
 **/
define(__NAMESPACE__ . '\AUTHORITIES', serialize(
	array(
		'pierce',
		'techmeme',
		'techcrunch',
		'campuscodi',
		'ingridlunden',
		'joshconstine',
		'kyle_l_wiggers',
	)
));

/** Your email address, for error reporting. Separate multiple addresses with commas. */
const WEBMASTER = 'shashim@protocol.com';

/** For how many days should links remain in the database? Default: 1. Must be an integer. */
const EXPIRATION_DAYS = 1;

/** Your database credentials.
  * Only MySQL is supported, hipsters. */
const
	DB_NAME = 'heroku_c358dff0ee6a478', 
	DB_USER = 'bb7c3afb314323',
	DB_PASS = 'b3734406',
	DB_HOST = 'b3734406@us-cdbr-iron-east-04.cleardb.net',  // default: localhost
	DB_PORT = 3306;  // default: 3306

/** Your Twitter credentials. If you don't have any yet, visit https://dev.twitter.com and sign in.
  * Click "Create an app" and follow the instructions. Create an app with READ and WRITE access.
  * Then generate new access tokens. Don't share the secrets with anyone.
**/
const
	TWITTER_SCREEN_NAME = 'protocol fuego',
	TWITTER_CONSUMER_KEY = '5QbkTprJ6UkBTqjw0lHhbZcWS',
	TWITTER_CONSUMER_SECRET = 'Bt38kLzKkx3pyhZQBHfBn9JDJMTLYfk4HoJQRQXLsgDoPToHUO',
	TWITTER_OAUTH_TOKEN = '79571866-CnDEuXRc0H0eIAZretCHpH7BEvIOoW42bZLiVDqFu',
	TWITTER_OAUTH_SECRET = 'MnkLRmD6behDXlxWfSWSH83Iw2mKGlel7Gf8jsd1ui2Aa';

/** Your Bitly credentials. Visit this page to grab them: http://bitly.com/a/your_api_key 
  * Optional, recommended. Leave blank to disable.
**/
const
	BITLY_USERNAME = '',
	BITLY_API_KEY = '';

/** Your Goo.gl API credentials. Visit this page for instructions:
  * https://developers.google.com/url-shortener/v1/getting_started#APIKey 
  * Optional, recommended. Leave blank to disable.
**/
const GOOGL_API_KEY = '';

/** Your Embed.ly API credentials. Visit this page for a free account: http://embed.ly/embed/pricing 
  * Optional, but required to return metadata with URLs. Leave blank to disable.
**/
const EMBEDLY_API_KEY = '';

/**
  * All done, no more editing! Now run fetch.php at the command line.
**/
?>
