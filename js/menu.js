$(document).ready(function(){
    var state=1;
    $('.display-menu').on('click', function(){
        $('.animated_icon').toggleClass('open');
        if(state==1){
        $('.nav_bar').css("background", "#FFFBDF");
        $('.menu').css('color', '#2B303A');
        $('.content').css('color', '#2B303A');
        $('.as').css('background', '#2B303A');
        state=0;
        }
        else
        {
            $('.nav_bar').css("background", "none");
            $('.menu').css('color', '#FFFDBF');
            $('.content').css('color', '#FFFDBF');
            $('.as').css('background', '#FFFDBF');
            state=1;
        }
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