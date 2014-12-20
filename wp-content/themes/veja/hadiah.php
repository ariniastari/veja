<?php
/* 
Template Name: Hadiah Template
*/
?>

<?php get_header(); ?>
	<div class='container-fluid content'>
      <div class='row'>
        <div class='col-md-8 col-md-offset-2 white'>
          <h1 class='text-center'>Hadiah</h1>
          <div role='tabpanel'>
            <!-- Nav tabs -->
            <ul class='nav nav-tabs' role='tablist'>
              <li class='active' role='presentation'>
                <a aria-controls='home' data-toggle='tab' href='#home' role='tab'>
                  Testimoni
                  <br>
                  Campaign
                </a>
              </li>
              <li role='presentation'>
                <a aria-controls='profile' data-toggle='tab' href='#profile' role='tab'>
                  Racing Point
                  <br>
                  Alfamart
                </a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class='tab-content'>
              <div class='tab-pane active' id='home' role='tabpanel'>
                <?php the_field( "testimoni_intro" ); ?>
                <div class='row text-center hadiah'>
                	<?php

						// check if the repeater field has rows of data
						if( have_rows('testimoni_hadiah') ):

						 	// loop through the rows of data
						    while ( have_rows('testimoni_hadiah') ) : the_row();
							?>
								<div class='col-sm-4'>
				                    <img class='normal' src='<?php the_sub_field('intro_image'); ?>'>
				                    <h2><?php the_sub_field('intro_nama_hadiah'); ?></h2>
				                  </div>
				            <?php
						    endwhile;

						else :

						    // no rows found

						endif;

					?>
                </div>
              </div>
              <div class='tab-pane' id='profile' role='tabpanel'>
              	<?php the_field( "alfamart_intro" ); ?>
              	<div class='row text-center hadiah'>
                	<?php

						// check if the repeater field has rows of data
						if( have_rows('alfamart_hadiah') ):

						 	// loop through the rows of data
						    while ( have_rows('alfamart_hadiah') ) : the_row();
							?>
								<div class='col-sm-4'>
				                    <img class='normal' src='<?php the_sub_field('alfamart_image'); ?>'>
				                    <h2><?php the_sub_field('alfamart_nama_hadiah'); ?></h2>
				                  </div>
				            <?php
						    endwhile;

						else :

						    // no rows found

						endif;

					?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>