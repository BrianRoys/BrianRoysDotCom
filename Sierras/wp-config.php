<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cbroys_wp976');

/** MySQL database username */
define('DB_USER', 'cbroys_wp976');

/** MySQL database password */
define('DB_PASSWORD', 'g5g4S((Pd7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gmpitv7uh1ix7x1l9aof5hrjvgrhak33ycsc6oqeqnx9gpomyshqnkgvoruaowlj');
define('SECURE_AUTH_KEY',  'ukh3op7edzeqf9dv9qu1eyitqp9nht4zveqekesxcu0t59k5ujyk9bjkwzx97uvu');
define('LOGGED_IN_KEY',    'ijvc4ezqkx3s7phktskrsoqfrmzc3sjg3mthzzq4n1hvdsrsv3rl5a67zoi9olx9');
define('NONCE_KEY',        'w8zuhmteiemrnidaw0jurfotolrvd2a678evhdfn5tpgbxceensiokncguxszzux');
define('AUTH_SALT',        '2cypf4goxi0i1mawskd9pcvutt3gxnwbzmzwygggbzykgpyotvdw1mc3qkvbjvov');
define('SECURE_AUTH_SALT', 'crf22rozgedccs8eajqmvbuvjkxcchhjj2ukdgrxm01f9gatqgv8g097hgv7tru1');
define('LOGGED_IN_SALT',   'p66viebkyjhe22qgehy5vtvdwdtxd6qspeazyah4pyamomnmzkjqrsbfmfifvvmf');
define('NONCE_SALT',       '84foco3raiick8gqcsxleiwagwl0g9btjp9onyjefg6y4vh6yrbbsbtjessjh0bk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
