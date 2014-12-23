<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<!-- <div class="ngg-galleryoverview ngg-template-caption row gallery" id="<?php echo $gallery->anchor ?>"> -->

<?php if ($gallery->show_slideshow) { ?>
	<!-- Slideshow link -->
<!-- 	<div class="slideshowlink">
		<a class="slideshowlink" href="<?php echo nextgen_esc_url($gallery->slideshow_link) ?>">
			<?php echo $gallery->slideshow_link_text ?>
		</a>
	</div> -->
<?php } ?>

<?php if ($gallery->show_piclens) { ?>
	<!-- Piclense link -->
	<div class="piclenselink">
		<a class="piclenselink" href="<?php echo nextgen_esc_url($gallery->piclens_link) ?>">
			<?php _e('[View with PicLens]','nggallery'); ?>
		</a>
	</div>
<?php } ?>
	
	<!-- Thumbnails -->
    <?php $i = 0;?>
	<?php foreach ( $images as $image ) : ?>

	<div id="ngg-image-<?php echo $image->pid ?>" class="col-sm-3" >
		<div class="gallery-image" data-toggle="modal" data-target="#image-<?php echo $image->pid ?>" >
			<div class='tile'>
				<?php if ( !$image->hidden ) { ?>
				<img class="user" title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php //echo $image->size ?> />
				<?php } ?>
				<div class='caption'><?php if (!$image->hidden) { echo $image->caption; } ?></div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery" id="image-<?php echo $image->pid ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
		     <div class="modal-body">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	<div class="text-center">
			      	<h4>Testimonial Campaign</h4>
			      	<h5>"Apa Jadinya Indonesia Tanpa Asisten Rumah Tangga?"</h5>
			    </div>
		      	<div class="gallery-image">
			       	<div class='tile'>
						<img class="user" title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->imageURL) ?>"/>
						<div class='submitter'>Submitter by <span class="red"><?php echo nggcf_get_field($image->pid, "Nama"); ?></span></div>
					</div>
				</div>
		     </div>
			<p><?php echo $image->caption; ?></p>
	    </div>
	  </div>
	</div>
	<?php if ( $image->hidden ) continue; ?>
	<?php if ( $gallery->columns > 0 && ++$i % $gallery->columns == 0 ) { ?>
	<br style="clear: both" />
	<?php } ?>
 	<?php endforeach; ?>
 	
</div>
<!-- Pagination -->
<div class='row'>
	<div class='col-sm-6'>
  		<nav>
			<?php echo $pagination ?>
		</nav>
	</div>
	<div class='col-sm-6 text-right'>
      <a class='btn btn-danger' href='<?php echo esc_url( get_permalink( get_page_by_title( 'Upload Page' ) ) ); ?>'>Join the Campaign</a>
    </div>
</div>

<?php endif; ?>
