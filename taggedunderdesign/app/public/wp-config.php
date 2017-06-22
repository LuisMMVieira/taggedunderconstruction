<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MkD7+UFbW2zhDarFZH1SrTMb+gdjddQ+Ql2qrTYM5vwJLG8qjm8Z0BDS5w4NIsIdbZefpoWdsoTluVMe3BwL+g==');
define('SECURE_AUTH_KEY',  'EAwdzSPmHiST+H0Iqrqwu7/Avb0rxnJomfKgdl8FeFOpM5mPSs0PTEOWcqKwa3pKEIYdq9cdtiQwrT2MxmvSUQ==');
define('LOGGED_IN_KEY',    'JEKqWHxI4j5kDs/vBkvMlMHsjW8f+deeSaUUtC3R7/ZWcmoBSQFSPliYb1fhxTBUtWydhOIIUQumuTPjSRAfEA==');
define('NONCE_KEY',        'PsG1u/BIziRyGU7MChAekBk5qu3OpW7asGWlDiNl4s+S1HH+qFhnUfTjFnrXlm72I7oHG7ksHhXNHJ4rqtxhQA==');
define('AUTH_SALT',        'geZ+Oepz/hP6H5PSNrlYvjjwAEjpkHNxG7xHpMwDsQmWzsMq7vtoP9MCNUDgpvUFMtHscXNloK8zn3s1cRjSJQ==');
define('SECURE_AUTH_SALT', 'NuPgApThIK5OY6QTm04CRGls6LFxXJyplNle3Ms3Sj8gQkQhMTB7/8S9MWRxUJ3H+CO4Z2jZF2V1Ag6CJ0z5WA==');
define('LOGGED_IN_SALT',   'd0mdiSyK5dyMvWfpRVNTgx0tCAyI1sGx2Da0wbs72vXcYVaKrgC8otk0yZhxSLHTJ75ivDfFc3v0yzzC6Ok4xw==');
define('NONCE_SALT',       'f1GjmJUI4cZmRKPfZePiOCOI38kVgIBOc7Smf8L7zpAIE64I4fx1LKyY5ERI99vy2tmTW/4KpOfIGI+AacIM4A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
