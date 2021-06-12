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
    var titles="t"+n;
    var section=document.getElementById(section);
    var writeup=document.getElementById(writeup);
    var wos=$(window).width();
    // var wos=screen.width;
    var titles=document.getElementById(titles);
    if(workshops[n]==1)
    {
        if(wos>1000){  
          writeup.style.width="380px";
          section.style.height="25vw";
        }
        else
        {
          titles.style.bottom="-10%";
          section.style.height="300px";
          writeup.style.width="380px";
        }
        writeup.style.top="0%";
        
        writeup.style.width="300px";
        writeup.style.display="none";
        workshops[n]=0;
    }
    else
    {
        // $(writeup).attr("top","90%");
        if(wos>1000)
        {
          writeup.style.width="380px";
          section.style.height="40vw";
        }
        else
        {
          titles.style.bottom="-100%";
          section.style.height="500px";
          writeup.style.width="300px";
        }
        writeup.style.top="38%";
        titles.style.bottom="-50%";
        writeup.style.display="block";
        workshops[n]=1;
    }
}

window.addEventListener(onclick,workshop);

function workshopSize()
{
  for(var a=0;a<3;a++)
  {
    workshop(a);
    workshop(a);
  }
};

workshopSize();


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

  // Typing Effect Starts
const text=document.querySelector(".box-size-desc");
const strText=text.textContent;
const splitText=strText.split("");
console.log(splitText);
text.textContent="";
for(let i=0;i<splitText.length;i++){
    text.innerHTML += "<span class='fancy-text'>" + splitText[i] + "</span>";
}

let char=0;
let Timer=setInterval(onTick,50);

function onTick(){
    const span=document.querySelectorAll(".fancy-text")[char];
    span.classList.add('fade');
    char++;
    if(char===splitText.length){
        complete();
        return; 
    }
}
function complete(){
    clearInterval(Timer);
    timer=null;
}
  // Typing Effect Ends