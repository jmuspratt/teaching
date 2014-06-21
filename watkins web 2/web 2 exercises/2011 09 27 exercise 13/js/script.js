$(document).ready(function() {

 $('.trigger').click(function() {
    $(this).hide('fast');         // hide the poster image ('this' means the trigger the user clicked)
	$(this).next().show('fast');  // show the "next" HTML element in the DOM (make sure this is the video tag itself) 
	$(this).next().get(0).play(); // play the video
	
  });
});

