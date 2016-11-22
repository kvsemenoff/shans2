

$(document).ready(function(){
    $(".phone").mask("+ 7 (999) 999 - 99 - 99?"); 

    $('a[name=modal]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+150);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });

    
     
    $('.window .close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
      
    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    }); 
    
    function cleanTnakns(form){
        $('input[type="text"]').removeClass("error-input");
        $("input[type=text], textarea").val("");
        $('.window').hide();
        $('a[href=#thanks]').trigger('click');
        
    }

    $('input[type="text"]').mousedown(function() { 
        $('input[type="text"]').removeClass("error-input");
    });

    $(".form1").submit(function() { 
        var tel = $(this).find('input[name="tel"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnakns(this);
                }
            });
        }
        return false;
    });

    
  var owl = $(".dd-slider");
 
  owl.owlCarousel({

    loop:true,//Зацикливаем слайдер
    nav:true, //Навигация включена
    autoplay:true,//автозапуск
    smartSpeed:1000,//Время движения
    margin:0,
    navText:['<span class="prev-ars1"></span>','<span class="next-ars1"></span>'],
    responsive:{
        0:{
          items:1
        },
        380:{
          items:1
        },
        600:{
          items:1
        },
        1000:{
          items:1
        },
         1200:{
          items:1
        }
    }
     
  });
  

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });



$(".az-select").click(function(){
    $(this).find('.az-options').slideToggle(0);
    $(this).toggleClass('az-select-focus');
});


// tabs on cosmetic.php
// $('.df-tab-first ul li').click(function(e) {
//     e.preventDefault();
//     $('.df-tab-first li').removeClass('active');
//     $(this).addClass('active');
//     var tab = $(this).attr('href');
//     $('.tab').not(tab).css({'display':'none'});
//     $(tab).fadeIn(400);
// });
$('.df-tab-second ul li').click(function(e) {
    e.preventDefault();
    $('.df-tab-second li').removeClass('active');
    $(this).addClass('active');
    var tab = $(this).attr('href');
    $('.tab').not(tab).css({'display':'none'});
    $(tab).fadeIn(400);
});


//zoom on hover goods.php
if (window.matchMedia("(min-width:992px)").matches) {   
    var demoTrigger = document.querySelector('#df-script-zoom');
    var paneContainer = document.querySelector('.df-third-box');

    new Drift(demoTrigger, {
      paneContainer: paneContainer,
      inlinePane: false
    });
}

});



   
       
