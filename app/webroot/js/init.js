

$(function() {
    // $('#selddate1').datePicker().val(date.asString()).trigger('change');

    $( "#selddate1" ).datepicker({
        dateFormat: 'd M y',
        minDate: 0
    });
    $( "#seladate1" ).datepicker({
        dateFormat: 'd M y',
        minDate: 0
    });
    $( "#flight_date" ).datepicker({
        dateFormat: 'd M y'
    });


});

var status = 'close';

$("#quickLinksOpenCloseDiv").click(function(){

    if(status=='close'){




        $("#quickLinksOpenCloseDiv").animate({
            left: "220"

        },1510);

        $("#quickLinks").animate({
            width: "246",
            backgroundColor: "#0099CC",
            opacity: 0.95


        }, 1500 );

        status = 'open';

    }else{

        $("#quickLinks").animate({
            width: "26",
            opacity: 1,
            backgroundColor: "#fff"

        },1510);

        $("#quickLinksOpenCloseDiv").animate({
            left: "0"

        },1500);


        status= 'close';
    }
});

jQuery(document).ready(function($) {
        $('a[rel*=facebox]').facebox()
    });



$(document).ready(function() {

    $('#ui-datepicker-div').hide();

    

    $("#tidbox").click(function(){

        if(!$("#tidbox").attr('checked')){

            $("#retSpan").hide();


            $("#seladate1").hide(500).attr('disabled', 'disabled');
            $("#tid").val("OW");

            $("#rByPriceFlex").attr('disabled','disabled');
            $("#rByPrice").attr('checked', 'checked');

        }else{
            $("#tid").val("SB");
            $("#retSpan").show();
            $("#seladate1").show(500).attr('disabled', '');
            $("#rByPriceFlex").attr('disabled','').attr('checked', 'checked');



        }
    });




    if($.browser.msie && $.browser.version <= '6.0' ){
        $(".fairs").animate({
            backgroundColor:  "#000000",
            opacity: 0.6
        },1500);
    }


    $("#gallery").hover(
        function()
        {

            if($.browser.msie && $.browser.version <= '6.0' ){
                $("#fairs").animate({
                    opacity: 0.6,
                    backgroundColor:  "#000000"
                },500);
            }else{
                $("#fairs").animate({
                    opacity: 1
                },500);
            }
        },
        function()
        {
            $("#fairs").animate({
                opacity: 0
            },500);
        }
        );








//                    height = $(document).height();
//                    if(height<700){
//                $("#main").animate({
//                   height:  height
//
//                });
//                    }



});




//Left  Booking engine open close
var status = 'close';

$("#leftOpenClose").click(function(){

    if(status=='close'){




        $("#leftOpenClose").animate({
            left: "300"

        },1510);

        $("#leftBlock").animate({
            width: "325",
            backgroundColor: "#e0dfdf",
            borderColor: "#d2d2d6"


        }, 1500 );
        $("#leftOpenCloseIcon").attr({
            src : "/img/flight_backward.png"
        });
        status = 'open';

    }else{

        $("#leftOpenClose").animate({
            left: "0"
        },1500);

        $("#leftBlock").animate({
            width: "26",
            borderColor: "white"

        },1510);



        $("#leftOpenCloseIcon").attr({
            src : "/img/flight_forward.png"
        });
        status= 'close';
    }
});


//End Left Booking engine open close


//Special offers

var specialOffersStatus = 'close';


$("#leftSpecialOffersOpenClose").click(function(){

    if(specialOffersStatus=='close'){




        $("#leftSpecialOffersOpenClose").animate({
            left: "350"

        },1500);

        $("#leftSpecialOffers").animate({
            width: "376",
            backgroundColor: "#e0dfdf",
            borderColor: "#d2d2d6"



        }, 1500 );
        // $("#leftOpenCloseIcon").attr({src : "/img/icons/flight_backward.png" });
        specialOffersStatus = 'open';

    }else{

        $("#leftSpecialOffersOpenClose").animate({
            left: "0"
        },1500);

        $("#leftSpecialOffers").animate({
            width: "26",
            borderColor: "white"


        },1500);



        // $("#leftOpenCloseIcon").attr({src : "/img/icons/flight_forward.png" });
        specialOffersStatus= 'close';
    }
});


// End Special offers


//CSS
$(".tblStyle tr:even").css("background-color", "#E1F0FF");
$(".tblStyle tr:odd").css("background-color", "#BFDFFF");
$(".tblStyle td").css('padding','10px');
$(".tblStyle tr:first").css("background-color", "white");


$(".tblStyleSin tr:even").css("background-color", "#E1F0FF");
$(".tblStyleSin tr:odd").css("background-color", "#BFDFFF");
$(".tblStyleSin td").css('padding','10px');
$(".tblStyleSin tr:first").css("background-color", "white");


$('#promocode').val('Promotional code').css('color','#666666');

$("#promocode").click(function(){

    if($(this).val() == 'Promotional code' ){
      $(this).val('');
    }
});

$('#searchFormSubmit').click(function() {
  if($("#promocode").val() == 'Promotional code' ){
     
      $("#promocode").val('');
    }
});
//CSS

$(document).ready(function() {


        $("#searchPrice").click(function(){
			
			  if($("#returnTrip").attr('checked')){
				  isReturn = 'yes';
			  }else{
				  isReturn = 'no';
				  }
    $.ajax({
   type: "POST",
   url: "/lowfair_searches/search",
   data: "from="+$("#from").val()+"&to="+$("#to").val()+"&returnTrip="+isReturn,
   success: function(html){
     $("#res").html(html);
   }
 });

        });
    });