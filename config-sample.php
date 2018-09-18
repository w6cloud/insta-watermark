<?php
/**
 * Template class
 *
 * PHP version 7
 *
 * @category  Variable
 * @package   W6\InstaWatermark
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 * @since     1.0.0
 */

namespace W6\InstaWatermark;

/**
 * Configuration
 */
$config = [];

/**
 * Debug
 */
$config['debug'] = false;

/**
 * Base URL
 * Configure only if your script is based in a subfolder (eg: /insta-watermark)
 */
$config['baseUrl'] = '';

/**
 * Folder Path
 * Path to folder where images will be stored
 */
$config['folderPath'] = ROOT.'/uploads';

/**
 * Folder base URL
 * Base url to access the stored images
 */
$config['folderBaseUrl'] = $config['baseUrl'].'/uploads';

/**
 * Max upload size
 * Maximum size of uploaded images
 */
$config['maxUploadSize'] = 1024 * 1000 * 8; // 8 MB
