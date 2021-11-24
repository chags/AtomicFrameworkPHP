<?php
/**
* @Atomic framework
* @document: APP
* @version: 1.0.0
* @description: Arquivo de chamada dos compomentes e classes geral
* @author: Chags
* @license: GNU Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
*/
  $template = new TEngine();
  $app = new Module();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=$template->css(); ?>

    <title>Hello, world!</title>
  </head>
  <body>

<?php // $template->component('nav'); ?>
<?=$template->invokeView(); ?>

<?php
$template->js();
$template->component('sweetalert-notification');
?>
  </body>
</html>
 

