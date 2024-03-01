$(document).ready(function() {
    
    /**
     * 
     * 
     * 
     */

     $('.rajax_filter').on('change blur', function(){

     	ajax_url = window.location.protocol + "//" + window.location.host + "/wp-admin/admin-ajax.php";
     	elem     = $(this);
     	level    = elem.data('level');

     	slevel   = $('#level_'+(level + 1));
     	blevel   = $('.block_level_'+(level + 1));
     	search   = $('.species__detailed').data('search');

     	val      = elem.val();

     	$.ajax({  

			url:    ajax_url,
			type:   'POST',
			data:   'action=test&search='+search+'&level='+level+'&term_id='+val, // можно также передать в виде массива или объекта

			beforeSend: function( xhr ) {},

			success: function( data ) {
				
				obj 	= JSON.parse( data ); 
				mposts  = obj.posts; 

				if (val != 0) { 
					blevel.removeClass('d-none');
					slevel.empty().append( obj.elements );
					$( '.species__detailed-form' ).attr( 'style', 'height: 100%!important' );
					$( '#ajax_search' ).html( mposts );
				} else {
					for (let step = level; step < 7; step++)
						$('.block_level_'+(step + 1)).addClass('d-none');
					slevel.empty();
					slevel.empty();
				}

				slevel.data('id', 1);

				$(document).scroll(function() {

					if( $(window).scrollTop() + $( window).height() >= $(document).height() ){

					    $( '#ajax_search' ).html( mposts.split("scard_hidden").join("") );

					}

				});

			}

		});

     }); 

     /**
      * 
      * 
      * 
      */

     

     /*window.pcount = 1; 

      $('#load_posts').on('click', function(){

      		if ( window.pcount == 1) {

      			$('.scard.posts_2').addClass('posts_2_show');
      			$(this).attr('data-id', 2).hide();
      			window.pcount = 2; 

      		} else if ( window.pcount == 2) {

      			$('.scard.posts_3').addClass('posts_3_show');
      			$(this).attr('data-id', 3).hide();
      			window.pcount = 3; 

      		} else if ( window.pcount == 3) {

      			$('.scard.posts_4').addClass('posts_4_show');
      			$(this).attr('data-id', 4).hide();
      			window.pcount = 4; 

      		}

      		return false;

      });*/

});


$(document).scroll(function() {

	if ($(window).width() > 600)
		height = $(window).scrollTop() + $(window).height();
	else
		height = $(window).scrollTop() + $(window).height() + 180;

	height2 = $(document).height();

	if( height >= height2 ){

	    $( '.scard.scard_hidden' ).removeClass( 'scard_hidden' ); 

	}

});