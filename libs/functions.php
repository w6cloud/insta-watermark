<?php
/**
 * Functions
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
namespace W6\InstaWatermark;

/**
 * Autoload
 *
 * @param string $class_name Class name.
 *
 * @return void
 */
function autoload($className)
{
    if (false === strpos($className, 'W6\InstaWatermark')) {
        return;
    }
    $path = str_replace('W6\InstaWatermark', '', $className);
    $path = str_replace('\\', '/', $path);
    $path = ltrim($path, '/');
    $path = ROOT . '/libs/' . $path . '.php';
    if (file_exists($path)) {
        include_once $path;
    }
}

/**
 * URL
 *
 * @param string $url The desired URL relative to website root.
 *
 * @return string
 */
function url($url)
{
    return URL_BASE.$url;
}
