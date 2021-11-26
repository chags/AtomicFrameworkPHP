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
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=$template->css(); ?>

    <title>Atomic Framework!</title>
  </head>
  <body class="bg-indigo-100">
  <?php $template->component('nav'); ?>
  <div class="md:container md:mx-auto">
  <?=$template->invokeView(); ?>
</div>




<?php
$template->js();
$template->component('sweetalert-notification');
?>
  </body>
</html>
 

