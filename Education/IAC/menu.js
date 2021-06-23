function Register(){
    var a = document.getElementById("RegistrationForm")
    var iac=document.getElementById("IACRegistrationForm")
    var b = document.getElementById("Dashboard")
    a.style.width="100%";
    a.style.display="block";
    iac.style.display= "block";
    b.style.display="none";
}
function dashboard(){
    var x = document.getElementById("Dashboard")
    x.style.width = "100%";
    x.style.display = "block";
}

function IAC(){
    var c = document.getElementById("IAC-business")
    var d = document.getElementById("AssociateBusiness")
    c.style.width= "100%";
    c.style.display = "block";
    d.style.display = "block";
}

function KYC(){
    var dash =document.getElementById("Dashboard")
    var l= document.getElementById("verifications")
    l.style.display = "block";
    dash.style.display="none";
    l.style.visibility="visible";
}

function MyCourse(){
    var db= document.getElementById("Dashboard")
    const mC =document.getElementById("MyCourses")
    mC.style.width= "100%";
    mC.style.display="block";
    db.style.display= "none";
}

function  ReferalLink(){
    var D = document.getElementById("Dashboard")
    var rf=document.getElementById("ReferalLink")
    rf.style.display= "block";
    D.style.display="none";
}