$(document).ready(function(){
    $('.display-menu').on('click', function(){
        $('.animated_icon').toggleClass('open');
    });
});

$(document).ready(function(){
    var state=0;
    $('.a_atharv').on('click', function(){
        if(state==0)
        {
            $('.atharv_info').css("display","block");
            state=1;
        }
        else
        {
            $('.atharv_info').css("display","none");
            state=0;
        }
    });
});

$(document).ready(function(){
    var state=0;
    $('.a_mandeep').on('click', function(){
        if(state==0)
        {
            $('.mandeep_info').css("display","block");
            state=1;
        }
        else
        {
            $('.mandeep_info').css("display","none");
            state=0;
        }
    });
});