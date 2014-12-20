<?php
/* 
Template Name: Front Page Template
*/
?>

<?php get_header(); //d(has_post_thumbnail()); ?>

<?php if (has_post_thumbnail()): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );?>

<?php endif; ?>

<?php
  $content = get_the_content('Read more');
  print $content;
?>

  <div class='container-fluid content'>
    <div class='row'>
      <div class='col-md-2 hidden-xs hidden-sm'>
        <div class='sprites produk-1'></div>
      </div>
      <div class='col-md-8'>
        <div class='relative height'>
          <img class='youtube' data-video='http://www.youtube.com/embed/2y8APzvLFH4?autoplay=1' src='<?php echo $image[0] ?>'>
        </div>
        <div class='row campaign'>
          <div class='col-md-6 text-center'>
            <a class='btn btn-default' data-target='#myModal' data-toggle='modal' href='#'>
              Testimoni
              <br>
              Campaign
            </a>
            <p>Masukkan kode unik hasil pembelian Veja dan kumpulkan poin sebanyak-banyaknya untuk memenangkan hadiah mingguan menarik!</p>
          </div>
          <div class='col-md-6 text-center'>
            <a class='btn btn-default disabled' href='#'>
              Racing Point
              <br>
              Alfamart
            </a>
            <p>Masukkan kode unik hasil pembelian Veja dan kumpulkan poin sebanyak-banyaknya untuk memenangkan hadiah mingguan menarik!</p>
          </div>
        </div>
      </div>
      <div class='col-md-2 hidden-xs hidden-sm'>
        <div class='sprites produk-2'></div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>