<?php
/**
 * Main controller
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
 * Main controller
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
class MainController
{
    public function home()
    {
        $uploaded = false;
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
                header('Location: '.url('/view/'.pathinfo($pic->path, PATHINFO_BASENAME)));
                die;
            } catch (\Throwable $t) {
                $message = $t->getMessage();
            }
        }
        $title = 'Upload your picture';
        Template::render('home', compact('title', 'uploaded', 'message'));
    }

    public function view($basename)
    {
        Template::render('view', [
            'title' => 'View & download your picture',
            'imgUrl' => Config::get('folderBaseUrl').'/'.$basename,
            'downloadUrl' => url('/download/'.$basename)
        ]);
    }

    public function download($basename)
    {
        $path = Config::get('folderPath').'/'.pathinfo($basename, PATHINFO_BASENAME);
        if (!file_exists($path)) {
            header("HTTP/1.0 404 Not Found");
            die;
        }
        $mime = ($mime = getimagesize($path)) ? $mime['mime'] : $mime;
        $size = filesize($path);
        $fp = fopen($path, "rb");
        header("Content-type: ".$mime);
        header("Content-Length: ".$size);
        header("Content-Disposition: attachment; filename=".$basename);
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        fpassthru($fp);
        die;
    }
}
