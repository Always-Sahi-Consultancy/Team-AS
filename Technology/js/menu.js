$(document).ready(function(){
    var state=1;
    var scroll;
    var state2=1;
    $('.display-menu').on('click', function(){
        $('.animated_icon').toggleClass('open');
        if(state==1){
        $('.nav_bar').css("background", "white");
        $('.menu').css('color', '#2B303A');
        $('.content').css('color', '#2B303A');
        $('.as').css('background', '#2B303A');
        state=0;
        }
        else if(state!=1 && scroll>60)
        {
            $('.nav_bar').css("background", "white");
            $('.menu').css('color', '#2B303A');
            $('.content').css('color', '#2B303A');
            $('.as').css('background', '#2B303A');
            state=1;            
        }
        else
        {
            $('.nav_bar').css("background", "none");
            $('.menu').css('color', 'white');
            $('.content').css('color', 'white');
            $('.as').css('background', 'white');
            state=1;
        }
    });

    $(window).scroll(function(){
        scroll=$(window).scrollTop();
        var window_width=$(window).innerWidth();
        if(scroll<=60 && state==0)
        {
            $(".nav_bar").css("background", "white");
            $('.menu').css('color', '#2B303A');
            $('.content').css('color', '#2B303A');
            $('.brand-logo').css('display','block');
            $('.animated_icon span').css('background','black');
            $('.name').css('display','block');
        }
        else if(scroll>60){
            $(".nav_bar").css("background", "white");
            $('.menu').css('color', '#2B303A');
            $('.content').css('color', '#2B303A');
            $('.brand-logo').css('display','block');
            $('.animated_icon span').css('background','black');
            $('.name').css('display','block');
        }
        else{
            $(".nav_bar").css("background", "none");
            $('.menu').css('color', 'white');
            $('.content').css('color', 'white');
            if(window_width>768){
                $('.brand-logo').css('display','none');
                $('.name').css('display','none');
            }
            $('.animated_icon span').css('background','white');
        }
    });

    $('.database-title').on('click',function(){
        $('.front-end').css('display','none');
        $('.database').css('display','block');
        $('.back-end').css('display','none');
        $('.frontend').css('border_bottom','white');
        $('.backend').css('border_bottom','white');
        $('.database-title').css('border_bottom','red');
        if(state2==2)
        {
            $('.frontend').css('color','white');
            $('.backend').css('color','white');
            $('.database-title').css('color','red');
        }
        else
        {
            $('.frontend').css('color','black');
            $('.backend').css('color','black');
            $('.database-title').css('color','red');
        }
    });

    $('.frontend').on('click',function(){
        $('.front-end').css('display','block');
        $('.database').css('display','none');
        $('.back-end').css('display','none');
        $('.database-title').css('border_bottom','white');
        $('.backend').css('border_bottom','white');
        $('.frontend').css('border_bottom','red');
        if(state2==2)
        {
           $('.backend').css('color','white');
           $('.frontend').css('color','red');
           $('.database-title').css('color','white');
        }
        else
        {
            $('.database-title').css('color','black');
            $('.backend').css('color','black');
            $('.frontend').css('color','red');
        }
    });

    $('.backend').on('click',function(){
        $('.front-end').css('display','none');
        $('.database').css('display','none');
        $('.back-end').css('display','block');
        $('.frontend').css('border_bottom','white');
        $('.database-title').css('border_bottom','white');
        $('.backend').css('border_bottom','red');
        if(state2==2)
        {
            $('.frontend').css('color','white');
            $('.backend').css('color','red');
            $('.database-title').css('color','white');
        }
        else
        {
            $('.frontend').css('color','black');
            $('.database-title').css('color','black');
            $('.backend').css('color','red');
        }
    });

    $('.night').on('click',function(){
        var night_data=document.getElementById('night');
        
        if(state2==1)
        {
            $('body').css('background','black');
            $('.header').css('background','../image/patrick-fore-HVFYFns30-I-unsplash.jpg');
            $('.front-end').css('color','white');
            $('.database').css('color','white');
            $('.back-end').css('color','white');
            $('.frontend').css('color','white');
            $('.database-title').css('color','white');
            $('.backend').css('color','white');
            $('.tww').css('color','white');
            $('.customer').css('color','white');
            night_data.src="image/sun.png";
            $('.welcome').css('color','white');
            $('.service').css('color','white');
            $('.prev').css('color','white');
            $('.next').css('color','white');
            state2=2;
        }
        else if(state2==2)
        {
            $('body').css('background','white');
            $('.header').css('background','../image/zhengtao-tang-ltpQwpxObs8-unsplash.jpg');
            $('.front-end').css('color','black');
            $('.database').css('color','black');
            $('.back-end').css('color','black');
            $('.frontend').css('color','black');
            $('.database-title').css('color','black');
            $('.backend').css('color','black');
            $('.tww').css('color','black');
            $('.customer').css('color','black');
            night_data.src="image/moon.png";
            $('.welcome').css('color','black');
            $('.service').css('color','black');
            $('.prev').css('color','black');
            $('.next').css('color','black');
            state2=1;
        }
    });

});
