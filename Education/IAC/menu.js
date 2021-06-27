function tabs(n){
    var a = document.getElementById("ASSRegistrationForm");
    var iac=document.getElementById("IACRegistrationForm");
    var db = document.getElementById("Dashboard");
    var l= document.getElementById("verifications");
    var mC =document.getElementById("MyCourses");
    var rf=document.getElementById("ReferalLink");
    var supports= document.getElementById("generateticket");
    var requests=document.getElementById("requests");
    var content = document.getElementById("content");
    a.style.display="none";
    iac.style.display="none";
    l.style.display="none";
    mC.style.display="none";
    rf.style.display="none";
    supports.style.display="none";
    requests.style.display="none";

    if(n==1)
    {
        db.style.display="block";
        content.style.height="1100px";
        a.style.display="none";
        iac.style.display="none";
        l.style.display="none";
        mC.style.display="none";
        rf.style.display="none";
        supports.style.display="none";

    }
    else if(n==2)
    {
        mC.style.display="block";
        db.style.display="none";
    }
    else if(n==3)
    {
        rf.style.display="block";
        db.style.display="none";
    }
    else if(n==4)
    {
        a.style.display="block";
        iac.style.display="block";
        content.style.height="auto";
        db.style.display="none";
    }
   else if(n==5)
    {
        mr.style.display="block";
        db.style.display="none";
    }
    else if(n==6)
    {
        requests.style.display="block";
        db.style.display="none";
    }
    else if(n==7)
    {
        supports.style.display="block";
        db.style.display="none";
        content.style.height="1000px";
    }
    else if(n==8)
    {
        l.style.display="block";
        db.style.display="none";
        content.style.height="800px";
    }

}

window.addEventListener(onclick,tabs);

function downline(){
    document.getElementById("downlineInfo").style.display="block";
}

function iac(){
    document.getElementById("IAC-business").style.display="block";
    document.getElementById("content").style.height="1200px";
}

function OTP(n){
    if(n==1)
    {
    document.getElementById("OTP1").style.display="block";
    }
    else if(n==2)
    {
    document.getElementById("OTP2").style.display="block";
    document.getElementById("MobileChange").style.display="block";
    document.getElementById("BO2").style.display="none";
    }
    else if(n==3)
    {
        document.getElementById("OTP3").style.display="block";
        document.getElementById("BO3").style.display="none";
    }
    else if(n==4)
    {
        document.getElementById("OTP4").style.display="block";
        document.getElementById("BO4").style.display="none";   
    }
}

window.addEventListener(onclick,OTP);

$(function(){
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(window).resize(function(e) {
      if($(window).width()<=768){
        $("#wrapper").removeClass("toggled");
      }else{
        $("#wrapper").addClass("toggled");
      }
    });
  });




