<?php
/* 
Template Name: Leaderboard Template
*/
?>

<?php get_header(); ?>
	<div class='container-fluid content leaderboard'>
    <div class='row'>
      <div class='col-md-8 col-md-offset-2 white'>
        <div class="col-md-12">
          <?php while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>