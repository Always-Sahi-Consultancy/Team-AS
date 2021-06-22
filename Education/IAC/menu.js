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
    var d=document.getElementById("Dashboard")
    var l= document.getElementById("verifications")
    d.style.display="none";
    l.style.visibility="visible";
}

function MyCourse(){
    var d= document.getElementById("Dashboard")
    const C =document.getElementById("MyCourses")
    d.style.display= "none";
    C.style.width= "100%";
    C.style.display="block";
}