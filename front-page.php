<?php
/**
 * The front page of the whole site
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gloc_2022
 */

get_header( 'front-page' );
?>

<div class="highlight-gallery">
    <?php
    echo do_shortcode('[slider_pro id=899]');
    ?>
</div>