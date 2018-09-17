<?php
/**
 * Home controller
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
 * Home controller
 *
 * @todo customize download link according to config
 *
 * @category  Class
 * @package   W6\InstaWatermark\App
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 */
class HomeController
{
    public static function index()
    {
        $uploaded = false;
        $success = false;
        $message = 'Unknown error.';
        if (!empty($_POST)) {
            $uploaded = true;
            try {
                $watermark = new Upload('watermark', false);
                $watermark->handle();
                $pic = new Upload('pic');
                $pic->handle();
                $positions = array(
                    'top-left',
                    'top',
                    'top-right',
                    'left',
                    'center',
                    'right',
                    'bottom-left',
                    'bottom',
                    'bottom-right'
                );
                $position = isset($_POST['position']) && in_array($_POST['position'], $positions) ? $_POST['position'] : 'top-left';
                $image = new Watermark($pic->path, $watermark->path, $position);
                $image->handle();
                $success = true;
                $message = '<a href="files/'.pathinfo($pic->path, PATHINFO_BASENAME).'" target="_blank">Download image</a>';
            } catch (\Throwable $t) {
                $success = false;
                $message = $t->getMessage();
            }
        }
        Template::render('home', compact('uploaded', 'success', 'message'));
    }
}
