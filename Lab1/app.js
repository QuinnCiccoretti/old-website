var main = function(){
    
    var toggle = function(){
        $('#firstname').focus()
    if(closed)
    {
        $('.menu').animate({
        top:'0px'
    },200);
    $('body').animate({
        top:'700px'
    },200);
    closed = false;
    }
    else{
        $('.menu').animate({
        top:'-700px'
    },200);
    $('body').animate({
        top:'0px'
    },200);
    closed = true;
    }
    $('.help').fadeOut();
    }
    // $('.dropopboxes').click(function(){
    //     var option = $('.dropopboxes').val();
    //     if(option ==="View Full List"){
    //         $('.songs-K').size(99); 
    //         $('.songs-D').size(99); 
    //         $('.songs-E').size(99); 
    //         $('.songs-C').size(99); 
    //         $('.select-rap').size(99); 
    //     }
    //     else{
    //         $('.songs-K').size = 1; 
    //         $('.songs-D').size = 1; 
    //         $('.songs-E').size = 1; 
    //         $('.songs-C').size = 1; 
    //         $('.select-rap').size = 1; 
    //     }
    // });
    var closed = true;
    $('.icon-menu').click(toggle);
    // $('.select-rap').click(function(){
    //     var rapper = $('.select-rap').val();
    //     if(rapper==="Kendrick Lamar"){
    //         $('.songs-D').hide();
    //         $('.songs-E').hide();
    //         $('.songs-C').hide();
    //         $('.songs-K').show();
            
    //     }
    //     if(rapper==="Drake"){
    //         $('.songs-K').hide();
    //         $('.songs-E').hide();
    //         $('.songs-C').hide();
    //         $('.songs-D').show();
            
    //     }
    //     if(rapper==="Eminem"){
    //         $('.songs-C').hide();
    //         $('.songs-K').hide();
    //         $('.songs-D').hide();
    //         $('.songs-E').show();
            
    //     }
    //     if(rapper==="Childish Gambino"){
    //         $('.songs-K').hide();
    //         $('.songs-D').hide();
    //         $('.songs-E').hide();
    //         $('.songs-C').show();        }
        
    // });
    $('.icon-close').click(function(){
        toggle();
        $('.icon-menu').flip('toggle');
    });
    $('.icon-menu').flip({
    trigger: 'click'
    });

};

$(document).ready(main);
$(document).ready(function(){
    $('.title').hide();
    $('.title').fadeIn(3000);
    $('.icon-menu').hide();
    $('.icon-menu').fadeIn(3000);
    $('.songs-D').hide();
    $('.songs-E').hide();
    $('.songs-C').hide();
    });