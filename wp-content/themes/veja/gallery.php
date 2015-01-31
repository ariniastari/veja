<?php
/* 
Template Name: Gallery Template
*/
?>

<?php get_header(); ?>
<?php //echo do_shortcode('[ngg_images gallery_ids="1" display_type="photocrati-nextgen_basic_thumbnails"]');?>
    <div class='container-fluid content gallery'>
      <div class='row'>
        <div class='col-md-8 col-md-offset-2 white'>
          <div class='row title' style="margin-bottom: 0;">
            <div class='col-sm-5'>
              <h1>Gallery</h1>
            </div>
            <div class='col-sm-6'>
              <h4>Testimoni Campaign</h4>
              <h5>"Apa Jadinya Indonesia Tanpa Asisten Rumah Tangga?"</h5>
            </div>
          </div>
          <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

      // Include the page content template.
      get_template_part( 'content', 'page' );

    // End the loop.
    endwhile;
    ?>
          <!-- <div class='row gallery'>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-3'>
              <div class='gallery-image'>
                <div class='tile'>
                  <img class='user' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img.jpg'>
                  <div class='caption'>
                    <p>Cras ut mi consectetur, interdum sapien at, fringilla mauris...</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class='row'>
            <div class='col-sm-6'>
              <nav>
                <ul class='pagination'>
                  <li class='first'>
                    <a href='#'>PAGE</a>
                  </li>
                  <li>
                    <a href='#'>1</a>
                  </li>
                  <li>
                    <a href='#'>2</a>
                  </li>
                  <li>
                    <a href='#'>3</a>
                  </li>
                  <li>
                    <a href='#'>4</a>
                  </li>
                  <li>
                    <a href='#'>5</a>
                  </li>
                  <li>
                    <a href='#'>
                      <span aria-hidden='true'>&raquo;</span>
                      <span class='sr-only'>Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class='col-sm-6 text-right'>
              <a class='btn btn-danger' href='#'>Join the Campaign</a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>