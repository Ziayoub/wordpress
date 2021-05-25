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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6We&_v=BVo8E9`wX#g9TP#(KFlE1sN]a^PWS{f4gXq=>`D/UIS4UL_XJ+F:JagQT' );
define( 'SECURE_AUTH_KEY',  'g:D$.6T^umf)jq;KX%d+,$@v#pG48vD =ew%=e]q=*icD^n! jIpY-[Bm?YOw|G.' );
define( 'LOGGED_IN_KEY',    'GNhCk9Enn}rM*i]Iq*]&d>ia<Vj3l@1LF1EF=;^j&QdLve@&ME+G]Sph.B<-lo6?' );
define( 'NONCE_KEY',        ' [nG`M9ru`Qr0FU5<jT.z]]Fu}6_<?=3$JH@w/izEhYBA8Ur2nUuSm#mO&C(bZyV' );
define( 'AUTH_SALT',        'A,*L*%T-J(=;8`sq!e*>[:^46T,Pa(YN-1#kqNi$U9zFI?Jt=8GYvB1`0RM>1l,(' );
define( 'SECURE_AUTH_SALT', '@&pPsx_aU};c2NOeQx-1S(Vrs`IJ/&7HnGI);<4@T Wc/F8pFsv:]yTXU%z7r6Za' );
define( 'LOGGED_IN_SALT',   'urz+XhiQuaxS_79UQHYFI8ppC{i_7C7$Ug#nm2&~BJ|d+3n1C|v`m%/ne?=cC[4Y' );
define( 'NONCE_SALT',       '>*yMR7&0!eYs#-ae9@vvE@2_T~M>%Vk07gX(`9R4iD8),q~+*VNxw:Z+B9?ubg[s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
