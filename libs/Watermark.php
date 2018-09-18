<?php
/**
 * Watermark
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

use Intervention\Image\ImageManagerStatic as Image;

/**
 * This class handles the watermarkinh of an image
 *
 * @category  Class
 * @package   W6\InstaWatermark\App
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 */
class Watermark
{

    /**
     * Constructor
     *
     * @param $pic string Picture
     * @param $watermark bool Watermark
     * @param $position string Watermark position
     *
     * @return void
     */
    public function __construct($pic, $watermark, $position)
    {
        $this->pic = $pic;
        $this->watermark = $watermark;
        $this->position = $position;
    }

    /**
     * Adds watermark and resizes the image
     *
     * @todo Choose driver in config
     *
     * @return void
     */
    public function handle()
    {
        list($width, $height, $type, $attr) = getimagesize($this->pic);
        if ($width > $height) {
            $newSize = $height;
            $offsetTop = 0;
            $offsetLeft = round(($width - $height) / 2);
        } else {
            $newSize = $width;
            $offsetTop = round(($height - $width) / 2);
            $offsetLeft = 0;
        }

        Image::configure(['driver' => 'gd']);
        $image = Image::make($this->pic)
            ->crop($newSize, $newSize, $offsetLeft, $offsetTop)
            ->resize(1080, 1080)
            ->insert($this->watermark, $this->position)
            ->save();
        unlink($this->watermark);
        //echo $image->response();
    }
}
