<?php
/* 
Template Name: Produk Template
*/
?>

<?php get_header(); ?>
    <div class='container-fluid content'>
      <div class='row produk'>
        <div class='col-md-8 col-md-offset-2'>
          <div class='row produk-center'>
            <div class='col-sm-4 col-sm-offset-1'>
              <div class='image-toggle' id='bottle'>
                <img src='<?php the_field( "botol_gambar_produk" ); ?>'>
                <span class='label-produk'>
                  <?php the_field( "botol_harga_kemasan" ); ?>
                </span>
              </div>
              <div class='image-toggle' id='pouch' style='display: none'>
                <img src='<?php the_field( "sachet_gambar_produk" ); ?>'>
                <span class='label-produk'>
                  <?php the_field( "sachet_harga_kemasan" ); ?>
                </span>
              </div>
            </div>
            <div class='col-sm-6 col-sm-offset-1'>
              <div class='sprites tagline'></div>
              <h1>Veja Serbaguna</h1>
              <p>Kemasan</p>
              <ul class='inline'>
                <li>
                  <div class='sprites bottle active image-toggler' data-image-id='#bottle'></div>
                </li>
                <li>
                  <div class='sprites pouch image-toggler' data-image-id='#pouch'></div>
                </li>
              </ul>
              <div class='clearfix'></div>
              <p>Varian</p>
              <ul class='inline'>
                <li>
                  <div class='varian blue'>Original</div>
                </li>
                <li>
                  <div class='varian pink'>Floral</div>
                </li>
                <li>
                  <div class='varian green'>Lemongrass</div>
                </li>
              </ul>
              <div class='clearfix'></div>
            </div>
          </div>
        </div>
        <div class='col-md-8 col-md-offset-2 white'>
          <div class='row'>
            <div class='col-sm-9'>
              <?php the_field( "tentang_veja" ); ?>
            </div>
            <div class='col-sm-3'>
              <h2>Gerai</h2>
              <ul class='gerai'>
                <?php

                  // check if the repeater field has rows of data
                  if( have_rows('gerai') ):

                    // loop through the rows of data
                      while ( have_rows('gerai') ) : the_row();
                      ?>
                        <li><?php the_sub_field('nama_gerai'); ?> </li>
                      <?php 
                      endwhile;

                  else :

                      // no rows found

                  endif;

                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>