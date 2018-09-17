<?php
/**
 * Template class
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
 * This class handles the template rendering
 *
 * @category  Class
 * @package   W6\InstaWatermark\Template
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 */
class Template
{
    use Singleton;
 
    /**
     * Instance init
     *
     * @return void
     */
    private function __construct()
    {
        $this->templates = new \League\Plates\Engine(ROOT.'/tpl');
    }


    /**
     * Init app
     *
     * @param string $view The view name.
     * @param array  $args The variables to pass to the view.
     *
     * @return void
     */
    public static function render($view, $args = [])
    {
        $t = self::instance();
        echo $t->templates->render($view, $args);
    }
}
