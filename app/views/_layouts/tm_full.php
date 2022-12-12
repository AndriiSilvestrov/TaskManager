<?php

use taskManager\View;
/** @var $this View */

/**
 * @var $debug \app\controllers\MainController
 */

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <?= $this->getFiles('css'); ?>
    <title>Task Manager</title>
</head>
<body>

<main class="wrapper">
    <div class="application application__container">
        <section class="application__navigation nav-section">
            <div class="nav-section__container">
                <div class="nav-section__logo logo">
                    <img src="<?= ASSETS; ?>/image/logo.png" alt="Задачник">
                </div>
                <nav class="nav-section__body">
                    <div class="nav-section__menu nav-menu">
                        <div class="nav-menu__title">Основное:</div>
                        <ul class="nav-menu__list">
                            <li class="nav-menu__item">
                                <a class="nav-menu__link nav-menu-link _link-active" href="#">
                                    <div class="nav-menu-link__icon"></div>
                                    <div class="nav-menu-link__title">Мои задачи</div>
                                </a>
                            </li>
                            <li class="nav-menu__item">
                                <a class="nav-menu__link nav-menu-link" href="#">
                                    <div class="nav-menu-link__icon"></div>
                                    <div class="nav-menu-link__title">Входящие</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-section__menu nav-menu">
                        <div class="nav-menu__title">Дополнительно:</div>
                        <ul class="nav-menu__list">
                            <li class="nav-menu__item">
                                <a class="nav-menu__link nav-menu-link" href="#">
                                    <div class="nav-menu-link__icon"></div>
                                    <div class="nav-menu-link__title">Уведомления</div>
                                </a>
                            </li>
                            <li class="nav-menu__item">
                                <a class="nav-menu__link nav-menu-link" href="#">
                                    <div class="nav-menu-link__icon"></div>
                                    <div class="nav-menu-link__title">Главная</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <?= $this->content; ?>
    </div>
    <?php include_once ASSETS . '/modal.php'; ?>
</main>

<?= $this->getFiles('js'); ?>

<?php debug($debug); ?>
</body>
</html>