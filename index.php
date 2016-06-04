<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$helperLoader->register();

use Helpers\Config;

$config = new Config;
$config->load('./config/config.php');

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax contact form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Ajax Contact Form</h1>
            <p>A simple ajax based contact form using pure JavaScript and PHP.</p>
            <p><a class="btn btn-primary btn-lg" href="https://github.com/pinceladasdaweb/Ajax-Contact-Form" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <form enctype="application/x-www-form-urlencoded;" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group" id="name-field">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>">
                </div>
            </div>
            <div class="form-group" id="email-field">
                <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>">
                </div>
            </div>
            <div class="form-group" id="subject-field">
                <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>">
                </div>
            </div>
            <div class="form-group" id="message-field">
                <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
            </div>
        </form>
    </div>
    
    <script src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form', {
            endpoint: './process.php'
        });
    </script>
</body>
</html>