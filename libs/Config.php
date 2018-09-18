<?php
/**
 * Config
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
 * Config class
 *
 * @category  Class
 * @package   W6\InstaWatermark\App
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 */
class Config
{
    use Singleton;

    /**
     * Configuration holder
     *
     * @var array
     */
    
    protected $config;

    /**
     * Constructor
     *
     * @return void
     */
    private function __construct()
    {
        $defaults = array(
            'debug' => false,
            'baseUrl' => '',
            'folderPath' => ROOT.'/uploads',
            'folderBaseUrl' => '/uploads'
        );
        include ROOT.'/config.php';
        $this->config = array_merge($defaults, $config);
    }

    /**
     * Getter
     *
     * @return mixed
     */
    public static function get($key)
    {
        $t = self::instance();
        if (!isset($t->config[$key])) {
            throw new \Exception('Invalid config key ('.$key.').');
        }
        return $t->config[$key];
    }
}
