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
        var window_width=$(window).innerWidth();
        if(scroll>60){
            $(".nav_bar").css("background", "#FFFBDF");
            $('.menu').css('color', '#2B303A');
            $('.content').css('color', '#2B303A');
            $('.brand-logo').css('display','block');
        }
        else{
            $(".nav_bar").css("background", "none");
            $('.menu').css('color', '#FFFDBF');
            $('.content').css('color', '#FFFBDF');
            if(window_width>768){
                console.log(window_width);
                $('.brand-logo').css('display','none');
            }
        }
    });

    $('.database-title').on('click',function(){
        $('.front-end').css('display','none');
        $('.database').css('display','block');
        $('.back-end').css('display','none');
    });

    $('.frontend').on('click',function(){
        $('.front-end').css('display','block');
        $('.database').css('display','none');
        $('.back-end').css('display','none');
    });

    $('.backend').on('click',function(){
        $('.front-end').css('display','none');
        $('.database').css('display','none');
        $('.back-end').css('display','block');
    });

});

// $(document).ready(function(){
    
// });

// $(documnet).ready(function(){

    
// });

// $(documnet).ready(function(){

    
// });