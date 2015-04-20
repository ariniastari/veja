jQuery( window ).load(function() {
    jQuery('#winner').modal('show');
    jQuery('.youtube').click(function(){
        video = '<iframe width="100%" height="100%" allowfullscreen src="'+ jQuery(this).attr('data-video') +'"></iframe>';
        jQuery(this).replaceWith(video);
        jQuery('.sprites.produk-1').addClass('remove');
    });

    jQuery('.height').css({
        'height': jQuery('.youtube').height() 
    });

    jQuery('.caption').css({
        'width': jQuery('.user').width() 
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();            
            reader.onload = function (e) {
                jQuery('#target').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    jQuery("#imagefiles").change(function(){
        console.log("baca");
        readURL(this);
    });

    jQuery('.image-toggler').click(function(){
        jQuery('.image-toggle').hide();
        jQuery('.image-toggler').removeClass('active');
        jQuery(this).addClass('active');
        jQuery(jQuery(this).attr('data-image-id')).show();
    });
});