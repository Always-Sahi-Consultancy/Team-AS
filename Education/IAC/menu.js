function tabs(n){
    var a = document.getElementById("ASSRegistrationForm");
    var iac=document.getElementById("IACRegistrationForm");
    var db = document.getElementById("Dashboard");
    var l= document.getElementById("verifications");
    var mC =document.getElementById("MyCourses");
    var rf=document.getElementById("ReferalLink");
    var supports= document.getElementById("generateticket");
    a.style.display="none";
    iac.style.display="none";
    l.style.display="none";
    mC.style.display="none";
    rf.style.display="none";
    supports.style.display="none";

    if(n==1)
    {
        db.style.display="block";
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
    }
    else if(n==8)
    {
        l.style.display="block";
        db.style.display="none";
    }

}

window.addEventListener(onclick,tabs);

function downline(){
    document.getElementById("downlineInfo").style.display="block";
}

function iac(){
    document.getElementById("IAC-business").style.display="block";
}

function OTP(){
    document.getElementById("OTP").style.display="block";
}

