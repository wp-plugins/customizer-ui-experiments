(function( $ ){
	$(document).ready(function(){

	$( '#customize-footer-actions' ).append( 
		'<div class="devices">' +
			'<button type="button" class="preview-desktop active"><span class="screen-reader-text">Enter desktop preview mode</span></button>' +
			'<button type="button" class="preview-tablet"><span class="screen-reader-text">Enter tablet preview mode</span></button>' +
			'<button type="button" class="preview-mobile"><span class="screen-reader-text">Enter mobile preview mode</span></button>' +
		'</div>' );

		// Preview size toggles.
		$( '#customize-footer-actions .devices button' ).on( 'click', function( event ) {
			var overlay = $( '.wp-full-overlay' );
			$( '#customize-footer-actions .devices button' ).removeClass( 'active' );
			overlay.removeClass( 'preview-full preview-desktop preview-tablet preview-mobile' )
			       .toggleClass( event.currentTarget.className );
			$( event.currentTarget ).addClass( 'active' );
		});

	});
})( jQuery );