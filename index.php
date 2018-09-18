<?php
/**
 * Instagram Watermark
 *
 * PHP version 7
 *
 * @category  Script
 * @package   W6\InstaWatermark
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 * @since     1.0.0
 */

 /**
  * Include config
  */
 require_once 'config.php';

/**
 * Debug
 */
define('W6\InstaWatermark\DEBUG', $config['debug']);

/**
 * URL Base
 */
define('W6\InstaWatermark\URL_BASE', $config['baseUrl']);

/**
 * Root folder
 */
define('W6\InstaWatermark\ROOT', dirname(__FILE__));

/**
 * Functions
 */
require_once 'libs/functions.php';

/**
 * Autoload
 */
spl_autoload_register('\W6\InstaWatermark\autoload');

/**
 * Composer
 */
require_once 'vendor/autoload.php';

/**
 * Init app
 */
\W6\InstaWatermark\App::init();
