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
        <form role='form'>
          <div class='col-sm-5 col-sm-offset-1 text-center'>
            <img id='target' src='assets/images/upload.png'>
            <span class='btn btn-pink btn-sm btn-file'>
              Click here to choose your file
              <input id='imgInp' type='file'>
            </span>
          </div>
          <div class='col-sm-5'>
            <div class='form-group'>
              <input class='form-control' id='name' placeholder='Name' style='margin-top: 10px;' type='text'>
            </div>
            <div class='form-group'>
              <input class='form-control' id='email' placeholder='E-mail' type='email'>
            </div>
            <div class='form-group'>
              <input class='form-control' id='name' placeholder='Nomor HP' type='text'>
            </div>
            <div class='form-group'>
              <textarea class='form-control' placeholder='Alamat' rows='7'></textarea>
            </div>
          </div>
          <div class='col-sm-10 col-sm-offset-1'>
            <div class='form-group'>
              <label for='name'>
                <h3>Tulis Caption Anda</h3>
              </label>
              <textarea class='form-control' rows='3'></textarea>
            </div>
          </div>
          <div class='col-sm-12 text-center'>
            <button class='btn btn-danger' type='submit'>Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>