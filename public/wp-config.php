<?php

// This loads and composer packages
require dirname( __DIR__ ) . '/vendor/autoload.php';

// This lets us use our .env file
$dotenv = new Dotenv\Dotenv( dirname( __DIR__ ) );
$dotenv->load();

define('DB_NAME', getenv("DB_NAME"));
define('DB_USER', getenv("DB_USER"));
define('DB_PASSWORD', getenv("DB_PASSWORD"));
define('DB_HOST', getenv("DB_HOST"));
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '7lJq;<C9H.=^e[I82:zwL;V6 w&s3fDcyp3%V4s9tLy!,k+mHc_E,R0j^1<BcXa<');
define('SECURE_AUTH_KEY',  'b(EmXS !;aZNv8n+>+7s--5mKoiJ-w(op|{cB|LhY}maqdJ-h~Mx=6q~F2O/4IV/');
define('LOGGED_IN_KEY',    '!K_CdRav${ #/3m>#zBq,d%KWcC.kCNIXtu~Ffra5;q00J{B=|x@X.K<Q<c VN:8');
define('NONCE_KEY',        '-Z1y EZmp|HW1.y_:wf:tlc[@Rv-S%m+Ghw<Ef)R&D[(}s([C&4PEdmI+A|p|%1D');
define('AUTH_SALT',        'U($Cz$$Cay]N%4BN3zgPL;ZT(F`#RFH1*L+P4o6j&&yu+?Z*qC$Yl.h7g`E-nF2L');
define('SECURE_AUTH_SALT', '%l]~7@obkotzh.]uR-1;]A-xe.d(?hoQi{1%~[Q?aDfK:lqA`s#`OxQ.U!C([WmQ');
define('LOGGED_IN_SALT',   'C.~P+&Y`61eY]}~H^/=S,^Tj|ar2Q}maz~X0Rb D{F;$T?TZtxJ >}R>0bp}$4},');
define('NONCE_SALT',       'm<Urbb>7`9$hC$0?Hy+QoE7U)]*K6f?Lt]IalC^rUv#AjP??>R`&WcH.==]o+WW~');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('table_prefix');

if( getenv("environment") == 'development' || getenv("environment") == 'staging' ){
	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
} else {
	define('WP_DEBUG', false);
}

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/app' );
define( 'WP_CONTENT_URL','http://'.$_SERVER['HTTP_HOST'].'/app' );
define( 'UPLOADS', dirname(__FILE__) . '/app/uploads' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
