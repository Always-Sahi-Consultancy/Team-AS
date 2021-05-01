$(document).ready(function () {
  $(".logins").on("click", function () {
    $(".login").css("display", "block");
    $(".signup").css("display", "none");
    $(".forgot_password").css("display", "none");
  });
});

$(document).ready(function () {
  $(".signups").on("click", function () {
    $(".login").css("display", "none");
    $(".signup").css("display", "block");
    $(".forgot_password").css("display", "none");
  });
});

$(document).ready(function () {
  $(".forgot_passwords").on("click", function () {
    $(".forgot_password").css("display", "block");
    $(".login").css("display", "none");
    $(".signup").css("display", "none");
  });
});

// function reset()
// {
//     var popup=document.getElementById("popup");
//     popup.classList.toggle("show");
// };
