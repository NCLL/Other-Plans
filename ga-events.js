jQuery( document ).ready( function() {
    var $amazonLink = jQuery( 'a[href*="amazon.com"]' );
    $amazonLink.on( 'click', function() {
        console.log( 'Sending GA event' );
        ga( 'send', 'event', 'Outbound link', 'Amazon', $amazonLink.html() );
    });
});
