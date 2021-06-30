
function headerSidelay() {
    var ham_icon = document.getElementById("ham_icon").classList.toggle("change");
}
// document.getElementById("ham_icon").addEventListener("click",headerSidelay);
$(document).ready(function () {
    $('#ham_icon').click(function () {
        $('#sidelay').toggleClass("Sidelay sidelay_full");
    });
});
// Services Section starts
const tab = document.getElementsByClassName("tab");
const tabs = document.getElementsByClassName("tabs");
const back = document.getElementsByClassName("back");
const front = document.getElementsByClassName("front");



function first(a) {
    switch (a) {
        case 0:
            for (var b = 0; b < 6; b++) {
                if (a == b) {
                    front[a].classList.add("flip");
                    back[a].classList.add("flip");
                    tab[a + 1].classList.add("target");
                }
                else {
                    front[b].classList.remove("flip");
                    back[b].classList.remove("flip");
                    tab[b + 1].classList.remove("target");
                }
            }
            break;
        case 1:
            for (var b = 0; b < 6; b++) {
                if (a == b) {
                    front[a].classList.add("flip");
                    back[a].classList.add("flip");
                    tab[a + 1].classList.add("target");
                }
                else {
                    front[b].classList.remove("flip");
                    back[b].classList.remove("flip");
                    tab[b + 1].classList.remove("target");
                }
            }
            break;
        case 2:
            for (var b = 0; b < 6; b++) {
                if (a == b) {
                    front[a].classList.add("flip");
                    back[a].classList.add("flip");
                    tab[a + 1].classList.add("target");
                }
                else {
                    front[b].classList.remove("flip");
                    back[b].classList.remove("flip");
                    tab[b + 1].classList.remove("target");
                }
            }
            break;
        case 3:
            for (var b = 0; b < 6; b++) {
                if (a == b) {
                    front[a].classList.add("flip");
                    back[a].classList.add("flip");
                    tab[a + 1].classList.add("target");
                }
                else {
                    front[b].classList.remove("flip");
                    back[b].classList.remove("flip");
                    tab[b + 1].classList.remove("target");
                }
            }
            break;
        case 4:
            for (var b = 0; b < 6; b++) {
                if (a == b) {
                    front[a].classList.add("flip");
                    back[a].classList.add("flip");
                    tab[a + 1].classList.add("target");
                }
                else {
                    front[b].classList.remove("flip");
                    back[b].classList.remove("flip");
                    tab[b + 1].classList.remove("target");
                }
            }
            break;
        case 5:
            for (var b = 0; b < 6; b++) {
                if (a == b) {
                    front[a].classList.add("flip");
                    back[a].classList.add("flip");
                    tab[a + 1].classList.add("target");
                }
                else {
                    front[b].classList.remove("flip");
                    back[b].classList.remove("flip");
                    tab[b + 1].classList.remove("target");
                }
            }
            break;

    }
}

window.addEventListener(onclick, first);
// Services Section Ends
function second(c) {
    switch (c) {
        case 0:
            back[c].classList.remove("flip");
            front[c].classList.remove("flip");
            tab[c + 1].classList.remove("target");
            break;
        case 1:
            back[c].classList.remove("flip");
            front[c].classList.remove("flip");
            tab[c + 1].classList.remove("target");
            break;
        case 2:
            back[c].classList.remove("flip");
            front[c].classList.remove("flip");
            tab[c + 1].classList.remove("target");
            break;
        case 3:
            back[c].classList.remove("flip");
            front[c].classList.remove("flip");
            tab[c + 1].classList.remove("target");
            break;
        case 4:
            back[c].classList.remove("flip");
            front[c].classList.remove("flip");
            tab[c + 1].classList.remove("target");
            break;
        case 5:
            back[c].classList.remove("flip");
            front[c].classList.remove("flip");
            tab[c + 1].classList.remove("target");
            break;
    }
}
window.addEventListener(onclick, second);

var aboutState = 0;
function aboutHeader() {
    var as2 = document.getElementById("about-header-2");
    var ia = document.getElementById("read-more-about");
    var amt = document.getElementById("about-more-text");
    if (aboutState == 0) {
        as2.style.display = "block";
        ia.src = "../image/arrow-left.png";
        amt.innerText = "Read Less";
        aboutState = 1;
    }
    else if (aboutState == 1) {
        as2.style.display = "none";
        ia.src = "../image/arrow-right.png";
        amt.innerText = "Read More...";
        aboutState = 0;
    }
}
var states = { 1: 0, 2: 0, 3: 0 };
function navbarOptions(a) {
    var name = "sr" + a;
    var s = document.getElementById(name);
    if (states[a] == 0) {
        s.style.display = "inline-block";
        states[a] = 1;
    }
    else if (states[a] == 1) {
        s.style.display = "none";
        states[a] = 0;
    }
};

window.addEventListener(onclick, navbarOptions);

//footer
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("item");
    var dots = document.getElementsByClassName("f-dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 3000);
}

var slideindex = 0;
showslides();

function showslides() {
    var i;
    var slides = document.getElementsByClassName("f-item");
    var dots = document.getElementsByClassName("ff-dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideindex++;
    if (slideindex > slides.length) { slideindex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideindex - 1].style.display = "block";
    dots[slideindex - 1].className += " active";
    setTimeout(showslides, 3000);
}