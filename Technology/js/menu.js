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
        $('.frontend').css('color','black');
        $('.frontend').css('border-bottom','white');
        $('backend').css('color','black');
        $('backend').css('border-bottom','white');
        $('.database-title').css('color','red');
        $('.database-title').css('border-bottom','red');
    });

    $('.frontend').on('click',function(){
        $('.front-end').css('display','block');
        $('.database').css('display','none');
        $('.back-end').css('display','none');
        $('.database-title').css('color','black');
        $('.database-title').css('border-bottom','white');
        $('backend').css('color','black');
        $('backend').css('border-bottom','white');
        $('.frontend').css('color','red');
        $('.frontend').css('border-bottom','red');
    });

    $('.backend').on('click',function(){
        $('.front-end').css('display','none');
        $('.database').css('display','none');
        $('.back-end').css('display','block');
        $('.frontend').css('color','black');
        $('.frontend').css('border-bottom','white');
        $('.database-title').css('color','black');
        $('.database-title').css('border-bottom','white');
        $('backend').css('color','red');
        $('backend').css('border-bottom','red');
    });

    var state2=1;

    $('.night').on('click',function(){
        if(state2==1)
        {
            $('body').css('background','black');
            // $('.header').css('background','url("../image/patrick-fore-HVFYFns30-I-unsplash.jpg")');
            $('.front-end').css('color','white');
            $('.database').css('color','white');
            $('.back-end').css('color','white');
            $('.frontend').css('color','white');
            $('.database-title').css('color','white');
            $('.backend').css('color','white');
            $('.tww').css('color','white');
            $('.customer').css('color','white');
            state2=2;
        }
        else if(state2==2)
        {
            $('body').css('background','white');
            // $('.header').css('background','url("../image/zhengtao-tang-ltpQwpxObs8-unsplash.jpg")');
            $('.front-end').css('color','black');
            $('.database').css('color','black');
            $('.back-end').css('color','black');
            $('.frontend').css('color','black');
            $('.database-title').css('color','black');
            $('.backend').css('color','black');
            $('.tww').css('color','black');
            $('.customer').css('color','black');
            state2=1;
        }
    });

});

// $(document).ready(function(){
    
// });

// $(documnet).ready(function(){

    
// });

// $(documnet).ready(function(){

    
// });
