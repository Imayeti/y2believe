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
define('AUTH_KEY',         'qX9PcPMHOiewErt1kbY1IffJpYrhKO9WVRrVQo2jFS4Gw8wAJTTJEaLuNcwgXGSdOVYfBRDFko53fsrV4fOatA==');
define('SECURE_AUTH_KEY',  'ej8IXE5qXnAIyvZUiLRAfpUNdG+di+XENfGJku3UewY8El4urXfsiq3d+kJGsiplDGycv0yb25dWDbeHVYap0A==');
define('LOGGED_IN_KEY',    'R6zWBx1tbnrAYmLYto4fZsTH/UQtHpnbE2gmbWyLmO2G3Cb8v7dHrAy0crAFZE3PHHlTLhNMPN1ZsuzESRc6vA==');
define('NONCE_KEY',        '5jaTKignaJ/r8heKcb9aDOLfTlsZPNPrc2C27H9wcVKoT+xpz1VJW8gCTCz4zwuYUjfAAr1RqXzfEuGYzERQtQ==');
define('AUTH_SALT',        'uARt6xi22QQ05qsQ+8sQG5myZF/0ljp35Gu8q7i6wHZdDeAO6yA/3u5R5PH+9yosygYz7hLBQ/u5j04VW6NT0w==');
define('SECURE_AUTH_SALT', '3vqupLXToZe8+m+Cb0WWJMYA57qFgPaz/FHgz4fKYdH+n4gljiTXprBlsrEczczlGXz6SNFtbGHcVCPEDI3JnA==');
define('LOGGED_IN_SALT',   'T0umSCPoo2CpwF+wAAoNt6h0tbi+b5YNDDWMLvu6lSH8XnOSgLsUyaIQ9/f5mjzyURIjAaK0P36KprYDrrwx6g==');
define('NONCE_SALT',       'NRbJ9P0NDPxGwYrdDpP/xlG+nchcxy7fxVjt20VKG7gYgsdfSmzNmMk90yMjwNt13l0enACrqKK2VAqSsKVvkQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
