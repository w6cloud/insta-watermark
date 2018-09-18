<?php
/**
 * Default layout
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

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        <?php echo $this->e($title); ?> - Instagram Watermark
    </title>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous" />

    <link rel="stylesheet"
          href=https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/pulse/bootstrap.min.css />

    <link rel="stylesheet"
          href="<?php echo \W6\InstaWatermark\url('/assets/css/layout.css'); ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary"
         id="main-nav">
        <a class="navbar-brand"
           href="<?php echo \W6\InstaWatermark\url('/'); ?>">Instagram
            Watermark</a>
    </nav>

    <div class="container"
         id="main">
        <div class="page-header">
            <div class="container">
                <h1>
                    <?php if (isset($downloadUrl)) : ?>
                    <a class="btn btn-primary btn-lg float-right"
                       href="<?php echo $downloadUrl; ?>"
                       role="button">Download</a>
                    <?php endif; ?>
                    <?php echo $this->e($title); ?>
                </h1>
            </div>
            <?php echo $this->section('content'); ?>
        </div>

        <footer class="container"
                id="footer">
            <p>&copy; <a href="https://web6.fr/?utm_source=insta-watermark">WEB6</a> 2017-2018</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                crossorigin="anonymous"></script>
</body>

</html>