<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>



</head>
<body>

<div class="container" id="login-wrap">
    <!--h1>Это пустая страница</h1>
    <p>Вернуться на <a href="<?php echo site_url(); ?>">сайт</a></p-->
    <form class="form-horizontal" id="login-form" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend>Авторизация</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Логин</label>
                <div class="col-md-4">
                    <input id="input_login" name="input_login" type="text" placeholder="Логин" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Пароль</label>
                <div class="col-md-4">
                    <input id="input_pass" name="input_pass" type="password" placeholder="Пароль" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Войти</button>
                </div>
            </div>
            <div class="alert alert-danger" role="alert" style="display: none;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <span id="error"></span>
            </div>
        </fieldset>
    </form>

</div>

<script src="<?php echo site_url(); ?>/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo site_url(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/tinymce.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/jquery.tinymce.min.js')?>"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>

</body>
</html>