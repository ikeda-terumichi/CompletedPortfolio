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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'mKlp3ycG3/5ZFXZKRFvG6C2z3kkbg2OQ7HzpXByvoOCkcwz/BKRfovtv8w+ZzYI/cy6/SRaTsGrAysuDXcrRjQ==');
define('SECURE_AUTH_KEY',  '3Z33cpeZWGVsYVpbF5XP0Lz+KkBV8eS7OQ+5hrv+aEkORCq63J04l56mTT5qStNGL3to9XiTjb5rXPUQAmsiSg==');
define('LOGGED_IN_KEY',    'MRSRLQjfj6Ag3eXn1fIxm8e0MP2brEtbto3YgBmiSBpfDFeUOLK5HCsRSzK6QlTYABHK0m/RMuyXpmiO8l7blQ==');
define('NONCE_KEY',        'niN55u5mHOc5pDP5LIHAG94Hxu4MdQRH2D6MCFwduwQJx0DXgBD8lovhKyHw0ZjP8IWtdKzIeZ1s/gOrVVaAGA==');
define('AUTH_SALT',        'BjltIAhU67hh+QAqa6zUadQ5QfFqblpTwA8rJat9RfDSf/vBBZFEQ7C9SYwE7ExIpyvd3v+JC8og28ugxbSEuA==');
define('SECURE_AUTH_SALT', 'Xiq3qbhky8vLe6zJzJCn2KTOSCVZJaBmBOIr+9HmcujcRg4iWvXlSuTgHGXpWPxBQz+WYRRg/5CCCJKDqQdHoA==');
define('LOGGED_IN_SALT',   'VXkBZ69vGtkG1xhczA47HUBsdxagSIuBr/gbdTZDRPbaN9II/8rsYjORJkWtqm1Xah9wYWEBKFBmw55GCyYWmA==');
define('NONCE_SALT',       'D/++PgW14XCFp22d6Nbv4eux/UjvLegxYpZDpc01OqMrA6imkvC4teNIaieMniShJIUsoMYvmMoVWW219B7X7Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
