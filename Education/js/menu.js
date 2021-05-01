function show() {
    var x = document.getElementById("hiddenCourses");
    var btn = document.getElementById("moreC");
    if (x.style.display === "none") {
      x.style.display = "block";
      //x.style.visibility = "visible";
      btn.innerHTML = "SHOW LESS";
    } else {
      x.style.display = "none";
      btn.innerHTML = "MORE COURSES";
    }
  }
sj
show();