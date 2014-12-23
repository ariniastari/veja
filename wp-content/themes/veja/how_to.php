<?php
/* 
Template Name: How To Template
*/
?>

<?php get_header(); ?>
	<div class='container-fluid content'>
      <div class='row text-center'>
        <div class='col-md-8 col-md-offset-2 white'>
          <div class='row title'>
            <div class='col-sm-6'>
              <h1>Cara Ikutan</h1>
            </div>
            <div class='col-sm-6'>
              <h4>Testimonial Campaign</h4>
              <h5>"Apa Jadinya Indonesia Tanpa Asisten Rumah Tangga?"</h5>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-6'>
              <div class='sprites upload'></div>
              <h3>Upload Foto Anda via Website</h3>
              <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris. Aenean facilisis tellus quis condimentum ultricies.</p>
            </div>
            <div class='col-sm-6'>
              <div class='sprites caption'></div>
              <h3>Tulis Caption Anda</h3>
              <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris. Aenean facilisis tellus quis condimentum ultricies.</p>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <a class='btn btn-danger' href='<?php echo esc_url( get_permalink( get_page_by_title( 'Upload Page' ) ) ); ?>'>Upload</a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>