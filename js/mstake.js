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