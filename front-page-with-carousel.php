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

<section class="callouts carousel" aria-label="Gallery">
  <ol class="carousel__viewport">
    <?php

$args = array( 'tag' => 'callout' );

$postslist = get_posts( $args );

for ($i = 0; $i < count($postslist); $i++)
{
    $post = $postslist[$i];
    $next_i = $i++;
    if ($next_i >= count($postslist))
        $next_i = 0;
    
    $prev_i = $i--;
    if ($prev_i < 0)
        $prev_i = 0;
    ?>
    <li id="carousel__slide<?php echo $i; ?>" tabindex="<?php echo $i; ?>" class="callout-post carousel__slide">
      <div class="carousel__snapper"></div>
      <!-- <a href="#carousel__slide<?php echo $prev_i; ?>"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide<?php echo $next_i; ?>"
         class="carousel__next">Go to first slide</a> -->
      <?php 
        echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'callout-img' ) ); 
        ?>
      <div>
        <h2><?php echo $post->post_title; ?></h2>
        <p><?php echo $post->post_excerpt; ?></p>
      </div>
    </li>
    <?php
}
?>
  </ol>


  <aside class="carousel__navigation">
    <ol class="carousel__navigation-list">
      <?php
        for ($i = 0; $i < count($postslist); $i++)
        {
            ?>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide<?php echo $i; ?>" class="carousel__navigation-button">Go to slide <?php echo $i; ?></a>
      </li>
      <?php
        }
    ?>
    </ol>
  </aside>
</section>