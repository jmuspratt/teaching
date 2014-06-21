$(document).ready(function() {
		
// -----------------------
// Stylesheet switcher


	// Retrieve the "style" cookie
	var style = $.cookie('style');
	
	// If the cookie has something in it,
	// use its name as a replacement for the current stylesheet
	// (we need to add the ".css"
	if (style) {
		$("link[rel=stylesheet]").attr({href : 'css/' + style + '.css'});
	}
	
	// Have the 3 links change the style 
	// AND set a corresponding cookie
	
	// style1
	$("#set-style1").click(function() {
		$("link[rel=stylesheet]").attr({href : "css/style1.css"});
		$.cookie('style', 'style1');
		return false;
	});
	
	// style2
	$("#set-style2").click(function() {
		$("link[rel=stylesheet]").attr({href : "css/style2.css"});
		$.cookie('style', 'style2');
		return false;
	});
	
	// style3
	$("#set-style3").click(function() {
		$("link[rel=stylesheet]").attr({href : "css/style3.css"});
		$.cookie('style', 'style3');
		return false;
	});
	
});


// -----------------------
// Toggle grid with 'g' key
	$(document).keydown(function (k) {
		// g key is keycode/charcode 71
		if (k.keyCode == 71 || k.charCode == 71) { 
			$("#grid").fadeToggle("300");
			// return false;
			}


	}); // close $(document).ready(function() {...