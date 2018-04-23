<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ZhivoeSlovo
 */
?>

<?php get_header(); ?>
<section class="slogan container box">
    <div class="grid-line">
        <div class="col4">
            <img src="<?php bloginfo('template_url'); ?>/images/home/slogan1.png" alt="Познавай">
            <span class="title">Осознавай</span>
            <p>
                Мы дадим вам инструменты для осознания и раскрытия вашего потенциала.
                Вы узнаете себя, свои сильные и слабые стороны.
            </p>
        </div>
        <div class="col4">
            <img src="<?php bloginfo('template_url'); ?>/images/home/slogan2.png" alt="Развивайся">
            <span class="title">Расти</span>
            <p>
                Мы поможем вам вырасти личностно и духовно, опираясь на свои внутренние и внешние ресурсы.
            </p>
        </div>
        <div class="col4">
            <img src="<?php bloginfo('template_url'); ?>/images/home/slogan3.png" alt="Воплощай">
            <span class="title">Реализуй</span>
            <p>
                Перед вами раскроются истинные пути реализации. Вы качественно измените свою жизнь.
            </p>
        </div>
    </div>
</section>

<section class="upcoming-events">
    <div class="container box">
        <h2 class="title">Ближайшие мероприятия</h2>
        <div class="grid-line">
            <div class="col4">
                <div class="responsive">
                    <div class="event">
                        <img src="<?php bloginfo('template_url'); ?>/images/events/1-2015-06-25-Kma043VaMa.jpg">
                        <div class="descr">
                            <h4>Тренинг<br>&laquo;Моделирование реальности&raquo;</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="responsive">
                    <div class="event">
                        <img src="<?php bloginfo('template_url'); ?>/images/events/271101__sand-stones-zen_p.jpg">
                        <div class="descr">
                            <h4>Тренинг<br>&laquo;Энергия рода&raquo;</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="responsive">
                    <div class="event">
                        <img src="<?php bloginfo('template_url'); ?>/images/events/345323_jdpwjd.jpg">
                        <div class="descr">
                            <h4>Тренинг<br>&laquo;Предназначение&raquo;</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-activities container box">
    <h2 class="title">Наши направления</h2>
    <div class="box n1">
        <div class="cover"></div>
        <h3><span>Тренинги личностного развития</span></h3>
        <ul class="pure">
            <li>Школа развития личности</li>
            <li>Школа осознанных отношений</li>
            <li>Школа родительства</li>
            <li>Ораторское искусство. Базовый курс</li>
            <li>Соционика. Типирование</li>
            <li>Тренинг «Деньги»</li>
            <li>Ораторское искусство. Углубленный курс</li>
            <li>Консультации психолога</li>
        </ul>
    </div>
    <div class="box n2">
        <div class="cover"></div>
        <h3><span>Тренинги духовного развития</span></h3>
        <ul class="pure">
            <li>Школа духовного развития</li>
            <li>Работа с родом</li>
            <li>Тренинг по архетипам «Мужчина и Женщина»</li>
            <li>Метафизика заболеваний</li>
            <li>Системные семейные расстановки</li>
            <li>Исцеление внутреннего ребенка</li>
            <li>Школа целительства</li>
        </ul>
    </div>
    <div class="box n3">
        <div class="cover"></div>
        <h3><span>Бизнес тренинги</span></h3>
        <ul class="pure">
            <li>Деловая риторика</li>
            <li>Бизнес коммуникации</li>
            <li>Деловые переговоры</li>
            <li>Тайм-менеджмент</li>
            <li>Мотивация. Самомотивация. Командообразование</li>
            <li>Соционика для командообразования</li>
        </ul>
    </div>
</section>


<div class="subscription_wrap container box">
    <div class="subscription">
        <div class="text2">
            Хотите первыми узнавать о новых статьях, обучающих видео, о нашем расписании и предложениях?
        </div>
        <div class="text1">Подписаться на новости</div>
        <div class="triangle">
            <div class="helper"></div>
            <img src="<?php bloginfo('template_url'); ?>/images/home/newsletter-icon.png">
        </div>
    </div>
</div>
<?php get_footer(); ?>