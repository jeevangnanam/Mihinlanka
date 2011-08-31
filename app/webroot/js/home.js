/* Move forward or backwards between the images in the slideshow */
function gallery_change(direction){
    var active = $('#gallery .photos .item.active');
        
    var previous =  active.prev();
    var next =  active.next();
    if(!next.length){
        var next =  $('#gallery .photos .item:first');
    }
    if(!previous.length){
        var previous =  $('#gallery .photos .item:last');
    }
    active.addClass('last-active');
    if(direction == 'previous'){
        previous.css({
            opacity: 0.0
        }).addClass('active').animate({
            opacity: 1.0
        }, 1000, function(){
            active.removeClass('active last-active');
        });
    }else if(direction == 'next'){
        next.css({
            opacity: 0.0
        }).addClass('active').animate({
            opacity: 1.0
        }, 1000, function(){
            active.removeClass('active last-active');
        });
    }
}
$(document).ready(function(){
    /* Transform images into a slideshow */
    $('#gallery .photos img').each(function(i){
        var img_class = (i == 0 ? 'item active' : 'item');
        $('#gallery .photos').append('<div class="'+img_class+'" style="background:transparent url(\''+$(this).attr('src')+'\') no-repeat center center;cursor:pointer" href="'+$(this).attr('href')+'" title="'+$(this).attr('alt')+'"><h3>'+$(this).attr('alt')+'</h3></div>');
        $(this).remove();
    });
    var interval_id = setInterval("gallery_change('next')", 6000);
    $('#gallery .previous, #gallery .next').css('display', 'block');
    $('#gallery .next').click(function(){
        clearInterval(interval_id);
        gallery_change('next');
        interval_id = setInterval("gallery_change('next')", 6000);
        return false;
    });
    $('#gallery .previous').click(function(){
        clearInterval(interval_id);
        gallery_change('previous');
        interval_id = setInterval("gallery_change('next')", 6000);
        return false;
    });

    $('#gallery .photos .item').click(function(){
      
        taketo = $(this).attr('href');
     
     window.location = taketo;

        
    });

});