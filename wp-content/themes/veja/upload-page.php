<?php
/* 
Template Name: Upload Page Template
*/
?>
<?php get_header(); //d(has_post_thumbnail()); ?>
<div class='container-fluid content'>
  <div class='row'>
    <div class='col-md-8 col-md-offset-2 white'>
      <div class='row title'>
        <div class='col-sm-5'>
          <h1>Upload</h1>
        </div>
        <div class='col-sm-6'>
          <h4>Testimonial Campaign</h4>
          <h5>"Apa Jadinya Indonesia Tanpa Asisten Rumah Tangga?"</h5>
        </div>
      </div>
      <div class='row'>
        <?php echo do_shortcode('[ngg_uploader id=1]'); ?>
      </div>
    </div>
  </div>
</div>
<div id="primary" class="site-content">
  <div id="content" role="main">

  <?php the_content(); ?>

  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>