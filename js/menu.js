$(document).ready(function(){
    $('.display-menu').on('click', function(){
        $('.animated_icon').toggleClass('open');
    });

    $(window).scroll(function(){
        var scroll=$(window).scrollTop();
        if(scroll>60){
            $(".nav_bar").css("background", "#FFFBDF");
            $('.menu').css('color', '#2B303A');
            $('.content').css('color', '#2B303A');
        }
        else{
            $(".nav_bar").css("background", "none");
            $('.menu').css('color', '#FFFDBF');
            $('.content').css('color', '#FFFBDF');
        }
    })
});