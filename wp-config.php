<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Comercio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^mBn6X/`-*/1Ik,m ?h$L%1w=bv`=/va4ZPcWEUD=#$bh0hM]zz(i_Ko}m!&<YlX' );
define( 'SECURE_AUTH_KEY',  'Z/TDm;Y_VP[HC Y#5|IHvPb*/8.pnW]D+lSc!=^.#]&=Z38mZ<(o_#<9B}2gBfif' );
define( 'LOGGED_IN_KEY',    'EXc.$sh#p,gBRqclQ.`vRStn@,G]5n%M@`:LFk>w;c9 -XG@,ph]M0UHmi*lW1|5' );
define( 'NONCE_KEY',        '#:h:87*gT*EKs4=NQ3D*/~tuaysbDFJ04!OqBj})$jq7T3yOMqoAJ!::yL;3=F(K' );
define( 'AUTH_SALT',        '>?m<v5a*Cfm%rkSJ~fU%Fw-h]%haUAgQ*N;29ycIoTmO[, jEpQguxtkrp1sA0XA' );
define( 'SECURE_AUTH_SALT', ',w-7&dz1u6]@PszQu_,4E IEGbX[<gjo|3+I ]J#o^dqbGXrG.v.RWtO`HTbkQQl' );
define( 'LOGGED_IN_SALT',   'fHdi7d16u1g<*QpkmS;fqu0A40.75SbZ-|22R.1=QW!cqF)SjtTrm0r=rEGTt4v9' );
define( 'NONCE_SALT',       '-]<Wr<Am ]+yTsYYJ-{MGN%SZAclp2;F*-VMyGyz~JED0:r4-@VWbOP[n5;z|ANA' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

