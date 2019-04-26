jQuery(document).ready(function() {
	
	// Adding the x button
	jQuery(".ui-message").append('<span class="ui-close">X</span>');
	
	// Handling the click event
	jQuery(".ui-close").click(function() {
		jQuery(this).parents(".ui-message").fadeOut();
	});
	
	// Initially hide the answers for the FAQ section
	jQuery(".answer").hide();
	
	// Handling the FAQ question click
	jQuery(".faq h4").click(function() {
		
		jQuery(this).next(".answer").slideToggle();
		
	});
	
	jQuery(".faq h4").addClass("faq-question");
	
	// Dynamically load about content
	jQuery("#about").click(function() {
		jQuery(".about-placeholder").load("about.html .body-text");
		return false;
	});
	
});