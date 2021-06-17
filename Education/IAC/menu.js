function Register(){
    var a = document.getElementById("RegistrationForm")
    var b = document.getElementById("Dashboard")
    a.style.width="100%";
    a.style.display="block";
    b.style.display="none";
}
function dashboard(){
    var x = document.getElementById("Dashboard")
    x.style.width = "100%";
    x.style.display = "block";
}

function IAC(){
    var c = document.getElementById("IAC-business")
    var d = document.getElementById("table2")
    c.style.width= "100%";
    c.style.display = "block";
    d.style.display = "block";
}

function KYC(){
    document.getElementById("Dashboard").style.display="none";
    document.getElementById("verifications").style.width="100%";
    document.getElementById("verifications").style.display="block";
}