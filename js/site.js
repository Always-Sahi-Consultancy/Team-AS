function headerSidelay() {
  var ham_icon = document.getElementById("ham_icon").classList.toggle("change");
}
// document.getElementById("ham_icon").addEventListener("click",headerSidelay);
$(document).ready(function () {
  $('#ham_icon').click(function () {
    $('#sidelay').toggleClass("Sidelay sidelay_full");
  });
});

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

var state = 0;
function aboutUs() {
  var at2 = document.getElementById("about-text-2");
  var ia = document.getElementById("about-arrow");
  if (state == 0) {
    at2.style.display = "block";
    ia.src = "../image/arrow-up.png";
    state = 1;
  }
  else if (state == 1) {
    at2.style.display = "none";
    ia.src = "../image/arrow-down.png";
    state = 0;
  }
}

var workshops = { "1": 0, "2": 0, "3": 0 }

function workshop(n) {
  var section = "section-" + n;
  var writeup = "writeup-" + n;
  var titles = "t" + n;
  var section = document.getElementById(section);
  var writeup = document.getElementById(writeup);
  var wos = $(window).width();
  var woh = window.height;
  var titles = document.getElementById(titles);
  if (workshops[n] == 1) {
    if (wos > 1024) {
      section.style.height = "25vw";
    }
    else {

      if (wos > woh) {
        section.style.height = "42vh";//For mobile
      }
      else {
        section.style.height = "60vh";//Mobile
      }
    }
    writeup.style.top = "0%";
    writeup.style.display = "none";
    workshops[n] = 0;
  }
  else {
    $(writeup).attr("top", "90%");
    if (wos > 1024) {
      section.style.height = "45vw";
      writeup.style.top = "60%";
    }
    else {
      if (wos > woh) {
        section.style.height = "60vh";//For mobile
        writeup.style.top = "100%";
      }
      else {
        section.style.height = "100vh";//Mobile
        writeup.style.top = "60%";
        writeup.style.height = "40vh";
      }
    }
    writeup.style.display = "block";
    workshops[n] = 1;
  }
}

window.addEventListener(onclick, workshop);

function workshopSize() {
  for (var a = 0; a < 3; a++) {
    workshop(a);
    workshop(a);
  }
};

$(document).ready(function () {
  workshopSize();
});

function service(n) {
  var ser1 = document.getElementById("ser1");
  var ser2 = document.getElementById("ser2");
  var ser3 = document.getElementById("ser3");
  if (n == 1) {
    ser1.style.display = "block";
    ser2.style.display = "none";
    ser3.style.display = "none";
  }
  else if (n == 2) {
    ser1.style.display = "none";
    ser2.style.display = "block";
    ser3.style.display = "none";
  }
  else if (n == 3) {
    ser1.style.display = "none";
    ser2.style.display = "none";
    ser3.style.display = "block";
  }
};

window.addEventListener(onclick, service);
window.addEventListener(onmouseover, service);

function mainserviceoption() {
  var service = document.getElementById("#service");
  service.style.display = "inline-block";
  var head = document.getElementsByClassName(".head");
  console.log(head);
  head.style.border_bottom = "solid 3px var(--gray-400)";
};

window.addEventListener(onclick, mainserviceoption);

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

function debounce(func, wait = 20, immediate = true) {
  var timeout;
  return function () {
    var context = this, args = arguments;
    var later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

function Number() {
  console.log("hii");
  var positiontop = $(document).scrollTop();
  const achievement = document.getElementById("achievement");
  const SlideInAt = (window.scrollY + window.innerHeight) - achievement.offsetHeight / 2;
  // const imageBottom = achievement.offsetTop + achievement.offsetHeight;
  const isHalfShown = SlideInAt > achievement.offsetTop;
  const isNotScrolledPast = window.scrollY + window.innerHeight < (achievement.offsetTop + achievement.offsetHeight);
  console.log(window.scrollY);
  console.log(achievement.offsetTop);
  if (isHalfShown && isNotScrolledPast) {
    function animateValue(obj, start, end, duration) {
      let startTimestamp = null;
      const step = (time) => {
        if (!startTimestamp) {
          startTimestamp = time;
        }
        const progress = Math.min((time - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
        else {
          obj.innerHTML = Math.floor(progress * (end - start) + start) + "+";
        }
      };

      window.requestAnimationFrame(step);
    }

    const obj1 = document.getElementById("stat-box1");
    const obj2 = document.getElementById("stat-box2");
    const obj3 = document.getElementById("stat-box3");
    const obj4 = document.getElementById("stat-box4");
    animateValue(obj1, 0, 35, 2000);
    animateValue(obj2, 0, 350, 2000);
    animateValue(obj3, 0, 21, 1500);
    animateValue(obj4, 0, 15, 1500);
  }
}

window.addEventListener("scroll", debounce(Number));

// Typing Effect Starts
const text = document.querySelector(".box-size-desc");
const strText = text.textContent;
const splitText = strText.split("");
console.log(splitText);
text.textContent = "";
for (let i = 0; i < splitText.length; i++) {
  text.innerHTML += "<span class='fancy-text'>" + splitText[i] + "</span>";
}

let char = 0;
let Timer = setInterval(onTick, 50);

function onTick() {
  const span = document.querySelectorAll(".fancy-text")[char];
  span.classList.add('fade');
  char++;
  if (char === splitText.length) {
    complete();
    return;
  }
}
function complete() {
  clearInterval(Timer);
  timer = null;
}
// Typing Effect Ends
// Services Section starts
const tab = document.getElementsByClassName("tab");
const tabs = document.getElementsByClassName("tabs");
const back = document.getElementsByClassName("back");
const front = document.getElementsByClassName("front");



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
function about_us() {
  headerSidelay();
  $('#sidelay').toggleClass("Sidelay sidelay_full");
}