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
          <iframe class="youtube" width="100%" height="100%" src="//www.youtube.com/embed/FVjNHQ64SQk?autoplay=1" frameborder="0" allowfullscreen></iframe>
          <!-- <img class='youtube' data-video='http://www.youtube.com/embed/FVjNHQ64SQk?autoplay=1' src='<?php echo $image[0] ?>'> -->
        </div>
        <div class='row campaign'>
          <div class='col-md-6 text-center'>
            <a class='btn btn-default' data-target='#myModal' data-toggle='modal' href='#'>
              Testimoni
              <br>
              Campaign
            </a>
            <p>Ekspresikan kreatifitas Supermama Anda bersama Veja dan raih kesempatan memenangkan hadiah menarik dari Veja.</p>
          </div>
          <div class='col-md-6 text-center'>
            <a class='btn btn-default' href='<?php echo esc_url( get_permalink( get_page_by_title( 'Daftarkan Diri Anda' ) ) ); ?>'>
              Racing Point
              <br>
              Alfamart
            </a>
            <p>Masukkan kode unik hasil pembelian Veja di Alfamart dan kumpulkan poin sebanyak-banyaknya. Poin tertinggi berhak mendapatkan hadiah menarik dari Veja.</p>
          </div>
        </div>
      </div>
      <div class='col-md-2 hidden-xs hidden-sm'>
        <div class='sprites produk-2'></div>
      </div>
    </div>
  </div>
  <div aria-hidden='true' aria-labelledby='myModalLabel' class='modal fade' id='winner' role='dialog' tabindex='-1'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-body text-center'>
          <h1>Testimoni Campaign</h4>
          <p>Selamat <strong>Reyfitra</strong>, kamu menjadi pemenang Testimoni Campaign.</p>
          <p>Untuk Pemenang Racing Point Alfamart, Tim kami akan langsung menghubungi pemenang setelah melakukan validasi dengan pihak Alfamart.</p>
          <br/>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>