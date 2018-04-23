<?php
/**
 * Шаблон шапки (header.php)
 *
 * @package WordPress
 * @subpackage ZhivoeSlovo
 */
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Живое Слово</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>
<body id="body" class="noscript">

<!-- Для браузеров, где не работает js, применяем дополнительные стили -->
<script>document.getElementById('body').classList.remove("noscript")</script>

<header class="main-header">
    <div class="container">
        <div class="rhombuses box">
            <div class="rhombus r1">
                <div class="kharin">Александр Харин<br>руководитель проекта</div>
            </div>
            <div class="rhombus r2"></div>
            <div class="rhombus r3"></div>
            <div class="rhombus r4">
                <p class="tile" style="background-image: url('<?php bloginfo('template_url'); ?>/images/tile1.jpg')"></p>
            </div>
            <div class="rhombus big">
                <p class="tile" style="background-image: url('<?php bloginfo('template_url'); ?>/images/tile_big.jpg')"></p>
            </div>
            <div class="rhombus r5">
                <p class="tile" style="background-image: url('<?php bloginfo('template_url'); ?>/images/tile4.jpg')"></p>
            </div>
            <div class="rhombus r6">
                <p class="tile" style="background-image: url('<?php bloginfo('template_url'); ?>/images/tile3.jpg')"></p>
            </div>
            <div class="rhombus r7">
                <p class="tile" style="background-image: url('<?php bloginfo('template_url'); ?>/images/tile5.jpg')"></p>
            </div>
            <div class="rhombus r8"></div>
            <div class="rhombus r9"></div>
            <div class="rhombus r10"></div>
            <div class="rhombus r11"></div>
            <div class="rhombus r12"></div>
        </div>
    </div>
</header>

<menu id="main_menu" class="main-menu box">
    <div>
        <ul class="pure top">
            <li><a href="/">Главная</a></li>
            <li><a href="#">Тренинги</a></li>
            <li><a href="/blog-o-psyhologii.html">Статьи</a></li>
            <li><a href="/konsultatsii-psihologa.html">Консультации</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="/raspisanie">Расписание</a></li>
            <li><a href="/oplata-i-skidki.html">Стоимость</a></li>
            <li><a href="/video">Видео</a></li>
            <li><a href="/kontakty.html">Контакты</a></li>
            <li><a href="/o-nas.html">О&nbsp;нас</a></li>
        </ul>
    </div>
</menu>