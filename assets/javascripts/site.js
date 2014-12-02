$(document).ready(function() {
 
  $("#hero-slider").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay: true,
      pagination: false,
      navigationText: false,
      lazyFollow: true,
      lazyEffect: "fade"
      // rewindNav: false 
  });
 
});