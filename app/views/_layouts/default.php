<?php

use taskManager\View;
/** @var $this View */

/**
 * @var $debug \app\controllers\MainController
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->getFiles('css'); ?>
    <title>Document</title>
</head>
<body>
    <?= $this->content; ?>
    <?= $this->getFiles('js'); ?>

    <?php debug($debug); ?>
</body>
</html>
