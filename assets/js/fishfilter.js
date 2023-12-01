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
				
				obj = JSON.parse( data ); 
				
				console.log(obj);

				if (val != 0) { 
					blevel.removeClass('d-none');
					slevel.empty().append( obj.elements );
					$( '.species__detailed-form' ).attr( 'style', 'height: 100%!important' );
					$( '#ajax_search' ).html( obj.posts );
				} else {
					for (let step = level; step < 7; step++)
						$('.block_level_'+(step + 1)).addClass('d-none');
					slevel.empty();
					slevel.empty();
				}

				slevel.data('id', 1);

			}

		});

     }); 

});