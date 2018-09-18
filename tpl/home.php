<?php
/**
 * Home template
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

$this->layout('layout', ['title' => $title])
?>
<form action="<?php echo \W6\InstaWatermark\url('/'); ?>"
      method="post"
      enctype="multipart/form-data">
    <?php if ($uploaded) : ?>
    <div class="alert alert-danger"
         role="alert">
        <?php echo $this->e($message); ?>
    </div>
    <?php endif; ?>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"
                  id="picHelp">Picture</span>
        </div>
        <div class="custom-file">
            <input type="file"
                   class="custom-file-input"
                   id="pic"
                   name="pic"
                   required
                   aria-describedby="picHelp">
            <label class="custom-file-label"
                   for="pic">Choose file...</label>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"
                  id="watermarkHelp">Watermark</span>
        </div>
        <div class="custom-file">
            <input type="file"
                   class="custom-file-input"
                   id="watermark"
                   name="watermark"
                   required
                   aria-describedby="watermarkHelp">
            <label class="custom-file-label"
                   for="watermark">Choose file...</label>
        </div>
    </div>
    <div class="form-group">
        <label for="position"
               class="d-none">Position</label>
        <select class="custom-select"
                id="position"
                required
                name="position">
            <option value="top-left">Top left</option>
            <option value="top">Top</option>
            <option value="top-right">Top right</option>
            <option value="left">Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
            <option value="bottom-left">Bottom left</option>
            <option value="bottom">Bottom</option>
            <option value="bottom-right">Bottom right</option>
        </select>
    </div>
    <button type="submit"
            class="btn btn-primary btn-lg btn-block">Submit</button>
</form>