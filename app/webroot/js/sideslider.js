	$(document).ready(function() {
		$(".topMenuAction").click( function() {
			if ($("#openCloseIdentifier").is(":hidden")) {
				$("#slider").animate({ 
					marginLeft: "-141px"
					}, 500 );
				$("#topMenuImage").html('<img src="images/close.png" alt="open" />');
				$("#sliderWrap").animate('scrollLeft');
				$("#openCloseIdentifier").show();
			} else {
				$("#slider").animate({ 
					marginLeft: "0px"
					}, 500 );
				$("#topMenuImage").html('<img src="images/open.png" alt="close" />');
				$("#openCloseIdentifier").hide();
			}
		});  
	});
