function headerSidelay(){
    var ham_icon=document.getElementById("ham_icon").classList.toggle("change");
}
// document.getElementById("ham_icon").addEventListener("click",headerSidelay);
$(document).ready(function(){
    $('#ham_icon').click(function(){
        $('#sidelay').toggleClass("Sidelay sidelay_full");
    });
});

var workshops={"1":0,"2":0,"3":0}

function workshop(n)
{
    var section="section-"+n;
    var writeup="writeup-"+n;
    var section=document.getElementById(section);
    var writeup=document.getElementById(writeup);
    if(workshops[n]==1)
    {
        section.style.height="350px";
        writeup.style.top="0%";
        workshops[n]=0;
    }
    else
    {
        // $(writeup).attr("top","90%");
        section.style.height="450px";
        writeup.style.top="50%";
        workshops[n]=1;
    }
}

window.addEventListener(onclick,workshop);


$(document).ready(function () {
    // console.log("hi");
    $(window).scroll(function () {
      var positiontop = $(document).scrollTop();
    //   console.log(positiontop);
      if ((positiontop > 308) && (positiontop < 320)) {
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
    })
  })