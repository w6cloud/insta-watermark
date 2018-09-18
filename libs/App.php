<?php
/**
 * Main App
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
 * This class handles the app lifecycle
 *
 * @category  Class
 * @package   W6\InstaWatermark\App
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 */
class App
{
    /**
     * Init app
     *
     * @return void
     */
    public static function init()
    {
        if (DEBUG) {
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
        }

        $router = new \AltoRouter();

        if (!empty(URL_BASE)) {
            $router->setBasePath(URL_BASE);
        }

        $router->map(
            'GET|POST',
            '/',
            function () {
                $c = new MainController();
                $c->home();
            }
        );

        $router->map(
            'GET',
            '/view/[*:image]',
            function ($image) {
                $c = new MainController();
                $c->view($image);
            }
        );

        $router->map(
            'GET',
            '/download/[*:image]',
            function ($image) {
                $c = new MainController();
                $c->download($image);
            }
        );

        $match = $router->match();

        if ($match && is_callable($match['target'])) {
            call_user_func_array($match['target'], $match['params']);
        } else {
            header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        }
    }
}
