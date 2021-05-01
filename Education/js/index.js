function show() {
    var x = document.getElementById("courseSyllabus");
    var btn = document.getElementById("ViewButton");
    if (x.style.display === "none") {
      x.style.display = "block";
      //x.style.visibility = "visible";
      btn.innerHTML = "Show Less";
    } else {
      x.style.display = "none";
      btn.innerHTML = "View Complete Syllabus";
    }
  }
  show();