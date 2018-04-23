<?php
/**
 * Главная страница (index.php)
 *
 * @package WordPress
 * @subpackage ZhivoeSlovo
 */
?>

<?php get_header(); ?>
<section class="container box">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</section>
<?php get_footer(); ?>