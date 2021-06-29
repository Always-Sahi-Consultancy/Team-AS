function tabs(n) {
    var a = document.getElementById("ASSRegistrationForm");
    var iac = document.getElementById("IACRegistrationForm");
    var db = document.getElementById("Dashboard");
    var l = document.getElementById("verifications");
    var mC = document.getElementById("MyCourses");
    var rf = document.getElementById("ReferalLink");
    var supports = document.getElementById("generateticket");
    var RL = document.getElementById("requestList");
    var content = document.getElementById("content");
    a.style.display = "none";
    iac.style.display = "none";
    l.style.display = "none";
    mC.style.display = "none";
    rf.style.display = "none";
    supports.style.display = "none";
    RL.style.display = "none";

    if (n == 1) {
        db.style.display = "block";
        content.style.height = "1200px";
        a.style.display = "none";
        iac.style.display = "none";
        l.style.display = "none";
        mC.style.display = "none";
        rf.style.display = "none";
        supports.style.display = "none";
        RL.style.display = "none";
        document.getElementById("requests").style.display = "none";
        document.getElementById("downline").style.display = "none";

    }
    else if (n == 2) {
        mC.style.display = "block";
        db.style.display = "none";
    }
    else if (n == 3) {
        rf.style.display = "block";
        db.style.display = "none";
    }
    else if (n == 4) {
        a.style.display = "block";
        iac.style.display = "block";
        content.style.height = "auto";
        db.style.display = "none";
    }
    // else if(n==5)
    //     {
    //         mr.style.display="block";
    //         db.style.display="none";
    //     }
    else if (n == 7) {
        supports.style.display = "block";
        db.style.display = "none";
        content.style.height = "1000px";
    }
    else if (n == 8) {
        l.style.display = "block";
        db.style.display = "none";
        content.style.height = "800px";
    }

}

window.addEventListener(onclick, tabs);

function downline() {
    document.getElementById("downline").style.display = "block";
    document.getElementById("Dashboard").style.display = "none";
}

function iac() {
    document.getElementById("IAC-business").style.display = "block";
    document.getElementById("mycourses").style.display = "block";
    document.getElementById("content").style.height = "1450px";
}

function OTP(n) {
    if (n == 1) {
        document.getElementById("OTP1").style.display = "block";
    }
    else if (n == 2) {
        document.getElementById("mobileChange").style.display = "block";
        document.getElementById("BO2").style.display = "block";
        document.getElementById("BO2").innerHTML = "Resend OTP";
        document.getElementById("new").style.display = "block";
    }
    else if (n == 3) {
        document.getElementById("OTP3").style.display = "block";
        document.getElementById("BO3").style.display = "block";
        document.getElementById("BO3").innerHTML = "Resend OTP";
        document.getElementById("SU3").style.display = "block";
    }
    else if (n == 4) {
        document.getElementById("OTP4").style.display = "block";
        document.getElementById("BO4").style.display = "none";
    }
    else if (n == 5) {
        document.getElementById("OTP4").style.display = "block";
        document.getElementById("BO4").innerHTML = "Resend OTP";
        document.getElementById("SU").style.display = "block";

    }
}

window.addEventListener(onclick, OTP);

function ass() {
    document.getElementById("mycourses").style.display = "none";
    document.getElementById("IAC-business").style.display = "none";
}
function next(n) {
    if (n == 1) {
        document.getElementById("bankDetails").style.display = "block";
    }
}
window.addEventListener(onclick, next);


$(function () {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(window).resize(function (e) {
        if ($(window).width() <= 768) {
            $("#wrapper").removeClass("toggled");
        } else {
            $("#wrapper").addClass("toggled");
        }
    });
});

function show() {
    document.getElementById("requestList").style.display = "block";
    var requests = document.getElementById("requests");
    var db = document.getElementById("Dashboard");
    requests.style.display = "block";
    db.style.display = "none";
}

function request(n) {
    document.getElementById("mobileChange").style.display = "none";
    document.getElementById("BankChange").style.display = "none";
    document.getElementById("resignation").style.display = "none";
    document.getElementById("ASSRegistrationForm").style.display = "none";
    document.getElementById("IACRegistrationForm").style.display = "none";
    document.getElementById("verifications").style.display = "none";
    document.getElementById("MyCourses").style.display = "none";
    document.getElementById("ReferalLink").style.display = "none";
    document.getElementById("generateticket").style.display = "none";
    if (n == 1) {
        document.getElementById("mobileChange").style.display = "block";
        document.getElementById("ASSRegistrationForm").style.display = "none";
        document.getElementById("IACRegistrationForm").style.display = "none";
        document.getElementById("verifications").style.display = "none";
        document.getElementById("MyCourses").style.display = "none";
        document.getElementById("ReferalLink").style.display = "none";
        document.getElementById("generateticket").style.display = "none";
    }
    else if (n == 2) {
        document.getElementById("BankChange").style.display = "block";
        document.getElementById("ASSRegistrationForm").style.display = "none";
        document.getElementById("IACRegistrationForm").style.display = "none";
        document.getElementById("verifications").style.display = "none";
        document.getElementById("MyCourses").style.display = "none";
        document.getElementById("ReferalLink").style.display = "none";
        document.getElementById("generateticket").style.display = "none";
    }
    else if (n == 3) {
        document.getElementById("resignation").style.display = "block";
        document.getElementById("ASSRegistrationForm").style.display = "none";
        document.getElementById("IACRegistrationForm").style.display = "none";
        document.getElementById("verifications").style.display = "none";
        document.getElementById("MyCourses").style.display = "none";
        document.getElementById("ReferalLink").style.display = "none";
        document.getElementById("generateticket").style.display = "none";
    }
}

function SU(n) {
    if (n == 3) {
        document.getElementById("bankdetail").style.display = "block";
    }
}
window.addEventListener(onclick, SU);

