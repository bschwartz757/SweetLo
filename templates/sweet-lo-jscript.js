// JavaScript Document


//Google Maps api
  function initialize() {
	var mapCanvas = document.getElementById('map_canvas');
	var mapOptions = {
	  center: new google.maps.LatLng(47.679749, -122.360792),
	  zoom: 18,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions)
  }
  google.maps.event.addDomListener(window, 'load', initialize);
//End Google Maps api
  
	    
//Drop-Down Menu	  
	  	$(function () {
		$('nav li ul').hide().removeClass('fallback');
		$('nav li').hover(function () {
			$('ul', this).stop().slideToggle(300);
		});
	});
//End Drop-Down


//Toggle Nav Menu (mobile)
$(window).load(function() { // enable function upon window load
$(".menu-button").click(function() { // when toggle is clicked...
$("#nav-toggle").toggle(); // ... open or close the navigation
});
});
//End Toggle Nav Menu (mobile)
	