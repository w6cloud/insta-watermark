<?php
/**
 * View template
 *
 * PHP version 7
 *
 * @category  Template
 * @package   W6\InstaWatermark
 * @author    WEB6 <contact@web6.fr>
 * @copyright 2018 WEB6
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt  GNU GPLv3
 * @link      https://github.com/web6-fr/insta-watermark
 * @since     1.0.0
 */

$this->layout('layout', compact('title', 'downloadUrl'));
?>

<img src="<?php echo $imgUrl; ?>"
     class="img-fluid mx-auto d-block" />