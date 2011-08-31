	$(document).ready(function() {
		$(".topMenuAction").click( function() {
			if ($("#openCloseIdentifier").is(":hidden")) {
				$("#slider").animate({ 
					marginTop: "-141px"
					}, 500 );
				$("#topMenuImage").html('<img src="open.png" alt="open" />');
				$("#openCloseIdentifier").show();
			} else {
				$("#slider").animate({ 
					marginTop: "0px"
					}, 500 );
				$("#topMenuImage").html('<img src="close.png" alt="close" />');
				$("#openCloseIdentifier").hide();
			}
		});  
	});
