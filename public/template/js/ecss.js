jQuery(document).ready(function($) {
	jQuery('body').on('click', '#menu_toggle', function(event) {
		event.preventDefault();
		/* Act on the event */

		$.ajax({
			url: ROOT_PATH + "ajax/togglesidebar",
			type: 'GET',
			dataType: 'json'
		})
		.done(function(response) {
			console.log(response);
			// console.log(response);
		})
		.fail(function() {
			// console.log("error");
		})
		.always(function() {
			// console.log("complete");
		});
		
	});

	$('.go-full-screen').on('click', '.selector', function(event) {
		event.preventDefault();
		/* Act on the event */
		launchIntoFullscreen(document.documentElement);
	});
});

// Find the right method, call on correct element
function launchIntoFullscreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}