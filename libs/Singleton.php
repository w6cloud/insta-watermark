<?php
/**
 * Singleton trait
 *
 * PHP version 7
 *
 * @category  Class
 * @package   W6\InstaWatermark
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 * @since     1.0.0
 */

namespace W6\InstaWatermark;

/**
 * Singleton trait
 *
 * @category  Trait
 * @package   W6\InstaWatermark\Singleton
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 */
trait Singleton
{

    /**
     * Instance
     *
     * @var object
     */
    private static $instance = null;

    /**
     * Constructor
     *
     * @return void
     */
    private function __construct()
    {
    }

    /**
     * Block cloning
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Block wakeup
     *
     * @return void
     */
    private function __wakeup()
    {
    }

    /**
     * Get instance
     *
     * @return object The current instance
     */
    public static function instance()
    {
        return null === self::$instance ? self::$instance = new static() : self::$instance;
    }
}
