// ---------------------------
// Part 1: Show/Hide Toggling

$(document).ready(function(){
	
	// Start by hiding everthing with a class of toggle-content
 $(".toggle-content").hide(); 
	
	
	// Target the HTML <h3 class="toggle-trigger"> and on click, add the "active" class to it. Also toggle open the HTML element that comes immediately after it ("next") -- this happens to be div.toggle-content.
	$("h3.toggle-trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow"); 
		return false; // Don't follow the link itself (and don't scroll to the top)
	});

});




// ---------------------------
// Part 2: Tabs

$(document).ready(function() {

	// DO THIS STUFF AS SOON AS THE PAGE LOADS:
	
	// Hide all tab content as the page loads
	$(".tab-content").hide(); 
	
	// Then immediately show the first tab, animating it in over 800 millisconds
	$("ul.tabs li:first").addClass("active").show(800); 
	
	// Show the first <div class="tab-content">
	$(".tab-content:first").show("slow"); 
	
	
	// DO THIS STUFF WHEN A TAB GETS CLICKED:
	
	//
	$("ul.tabs li").click(function() {
		// Remove any "active" class if it's been added by jQuery	
		$("ul.tabs li").removeClass("active"); 
		
		// Add "active" class to the clicked tab
		$(this).addClass("active"); 
		
		// Hide all tab content
		$(".tab-content").hide(); 
		
		// Find the relevant attribute value to identify the active tab + content
		var activeTab = $(this).find("a").attr("href"); 
		
		// Fade in the active content
		$(activeTab).fadeIn(); 
		
		// Don't follow the link itself (and don't scroll down the page)
		return false; 
	});

});



// ---------------------------
// Part 3: Lightbox 
 
$(document).ready(function() {
        $('#set1 a').lightBox();
    });

$(document).ready(function() {

        $('#set2 a').lightBox({
		overlayBgColor: '#ff7200', // orange
		overlayOpacity: 0.3,
		containerResizeSpeed: 100,		
		txtOf: '/' 	 // output "1 / 3" instead of "1 of 3"
		});
    
});

