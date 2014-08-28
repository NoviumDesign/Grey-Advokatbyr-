/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
$( ".menu-toggle" ).click(function() {
  $( "#mobile-navigation" ).toggleClass( "active" );
});

$( ".menu-item-has-children" ).click(function() {
  $( this ).toggleClass( "current-menu-item" );
  $( ".sub-menu" ).toggleClass( "active" );
});