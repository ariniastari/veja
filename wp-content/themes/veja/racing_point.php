<?php
/* 
Template Name: Racing Point Page Template
*/
?>
<?php get_header(); //d(has_post_thumbnail()); ?>
<div class='container-fluid content'>
  <div class='row'>
    <div class="col-md-4 hidden-sm hidden-xs">
      <div class="sprites produk-racing"></div>
    </div>
    <div class='col-md-5 white'>
      <div class='title'>
        <h1 style="text-align: left;">Daftarkan Diri Anda</h1>
        <p> Isi data-data dibawah ini</p>
        <form role='form'>
          <div class='form-group'>
            <input class='form-control' id='name' placeholder='Name' style='margin-top: 10px;' type='text'>
          </div>
          <div class='form-group'>
            <input class='form-control' id='email' placeholder='E-mail' type='email'>
          </div>
          <div class='form-group'>
            <input class='form-control' id='name' placeholder='Nomor HP' type='text'>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Dengan mengirimkan data melalui form ini, saya setuju dengan <a href="#" class="blue">Terms and Conditions</a> yang berlaku
              </label>
            </div>
          </div>
          <button class='btn btn-danger' style="margin:10px 0;" type='submit'>Kirim</button>
        </form>
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