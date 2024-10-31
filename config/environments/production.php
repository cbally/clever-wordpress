<?php
/**
 * Configuration overrides for WP_ENV === 'staging'
 */

use Roots\WPConfig\Config;

/**
 * You should try to keep staging as close to production as possible. However,
 * should you need to, you can always override production configuration values
 * with `Config::define`.
 *
 * Example: `Config::define('WP_DEBUG', true);`
 * Example: `Config::define('DISALLOW_FILE_MODS', false);`
 */
Config::define('WP_ENV', 'production');
Config::define('WP_HOME', 'https://mytibo.io');
Config::define('WP_SITEURL', 'https://mytibo.io/wp');
Config::define('CC_PHP_VERSION', 8);
