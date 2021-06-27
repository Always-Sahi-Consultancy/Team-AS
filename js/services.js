// Services Section starts
const tab = document.getElementsByClassName("tab");
const tabs = document.getElementsByClassName("tabs");
const back = document.getElementsByClassName("back");
const front = document.getElementsByClassName("front");
const target = document.getElementsByClassName("target");
console.log(tab[7]);


function first(a) {
    switch (a) {
        case 0:
            for (var b = 0; b < 5; b++) {
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
            for (var b = 0; b < 5; b++) {
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
            for (var b = 0; b < 5; b++) {
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
            for (var b = 0; b < 5; b++) {
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
            for (var b = 0; b < 5; b++) {
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
    }
}
window.addEventListener(onclick, second);
function third(d) {
    switch (d) {
        case 5:
            for (var e = 5; e < 10; e++) {
                if (d == e) {
                    front[d].classList.add("flip");
                    back[d].classList.add("flip");
                    tab[d + 2].classList.add("target");
                }
                else {
                    front[e].classList.remove("flip");
                    back[e].classList.remove("flip");
                    tab[e + 2].classList.remove("target");
                }
            }
            break;
        case 6:
            for (var e = 5; e < 10; e++) {
                if (d == e) {
                    front[d].classList.add("flip");
                    back[d].classList.add("flip");
                    tab[d + 2].classList.add("target");
                }
                else {
                    front[e].classList.remove("flip");
                    back[e].classList.remove("flip");
                    tab[e + 2].classList.remove("target");
                }
            }
            break;
        case 7:
            for (var e = 5; e < 10; e++) {
                if (d == e) {
                    front[d].classList.add("flip");
                    back[d].classList.add("flip");
                    tab[d + 2].classList.add("target");
                }
                else {
                    front[e].classList.remove("flip");
                    back[e].classList.remove("flip");
                    tab[e + 2].classList.remove("target");
                }
            }
            break;
        case 8:
            for (var e = 5; e < 10; e++) {
                if (d == e) {
                    front[d].classList.add("flip");
                    back[d].classList.add("flip");
                    tab[d + 2].classList.add("target");
                }
                else {
                    front[e].classList.remove("flip");
                    back[e].classList.remove("flip");
                    tab[e + 2].classList.remove("target");
                }
            }
            break;
        case 9:
            for (var e = 5; e < 10; e++) {
                if (d == e) {
                    front[d].classList.add("flip");
                    back[d].classList.add("flip");
                    tab[d + 2].classList.add("target");
                }
                else {
                    front[e].classList.remove("flip");
                    back[e].classList.remove("flip");
                    tab[e + 2].classList.remove("target");
                }
            }
            break;


    }
}

window.addEventListener(onclick, third);
// Services Section Ends
function fourth(f) {
    switch (f) {
        case 5:
            back[f].classList.remove("flip");
            front[f].classList.remove("flip");
            tab[f + 2].classList.remove("target");
            break;
        case 6:
            back[f].classList.remove("flip");
            front[f].classList.remove("flip");
            tab[f + 2].classList.remove("target");
            break;
        case 7:
            back[f].classList.remove("flip");
            front[f].classList.remove("flip");
            tab[f + 2].classList.remove("target");
            break;
        case 8:
            back[f].classList.remove("flip");
            front[f].classList.remove("flip");
            tab[f + 2].classList.remove("target");
            break;
        case 9:
            back[f].classList.remove("flip");
            front[f].classList.remove("flip");
            tab[f + 2].classList.remove("target");
            break;
    }
}
window.addEventListener(onclick, fourth);

