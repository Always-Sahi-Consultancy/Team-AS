function headerSidelay(){
    var ham_icon=document.getElementById("ham_icon");
    ham_icon.classList.toggle("change");
}
// document.getElementById("ham_icon").addEventListener("click",headerSidelay);
$(document).ready(function(){
    $('#ham_icon').click(function(){
        $('#sidelay').toggleClass("Sidelay sidelay_full");
    });
})