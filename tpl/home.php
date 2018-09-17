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

$this->layout('layout', ['title' => 'Upload your picture'])
?>
<form action="<?php echo \W6\InstaWatermark\url('/'); ?>"
      method="post"
      enctype="multipart/form-data">
    <?php if ($uploaded) : ?>
    <div class="alert alert-<?php echo $success ? 'success' : 'danger'; ?>"
         role="alert">
        <?php echo $message; ?>
    </div>
    <?php endif; ?>
    <div class="form-group">
        <label for="pic">Picture</label>
        <input type="file"
               class="form-control-file"
               id="pic"
               name="pic"
               aria-describedby="picHelp">
        <small id="picHelp"
               class="form-text text-muted">Insert your picture here.</small>
    </div>
    <div class="form-group">
        <label for="watermark">Watermark</label>
        <input type="file"
               class="form-control-file"
               id="watermark"
               name="watermark"
               aria-describedby="watermarkHelp">
        <small id="watermarkHelp"
               class="form-text text-muted">Insert your watermark here.</small>
    </div>
    <div class="form-group">
        <label for="position">Position</label>
        <select class="form-control"
                id="position"
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
            class="btn btn-primary">Submit</button>
</form>