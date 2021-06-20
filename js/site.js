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
          section.style.height="42vh";
          writeup.style.width="100%";
        }
        writeup.style.top="0%";
        // writeup.style.width="300px";
        writeup.style.display="none";
        workshops[n]=0;
    }
    else
    {
        $(writeup).attr("top","90%");
        if(wos>1000)
        {
          writeup.style.width="380px";
          section.style.height="40vw";
          writeup.style.top="38%";
        }
        else
        {
          // titles.style.bottom="-100%";
          section.style.height="60vh";
          writeup.style.width="90%";
          writeup.style.top="30vh";
        }
        
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

$(document).ready(function()
{
  workshopSize();
});

function service(n)
{
  var ser1=document.getElementById("ser1");
  var ser2=document.getElementById("ser2");
  var ser3=document.getElementById("ser3");
  if(n==1)
  {
    ser1.style.display="block";
    ser2.style.display="none";
    ser3.style.display="none";
  }
  else if(n==2)
  {
    ser1.style.display="none";
    ser2.style.display="block";
    ser3.style.display="none";
  }
  else if(n==3)
  {
    ser1.style.display="none";
    ser2.style.display="none";
    ser3.style.display="block";
  }
};

window.addEventListener(onclick,service);
window.addEventListener(onmouseover,service);

function mainserviceoption()
{
  var service=document.getElementById("#service");
  service.style.display="inline-block";
  var head=document.getElementsByClassName(".head");
  console.log(head);
  head.style.border_bottom="solid 3px var(--gray-400)";
};

window.addEventListener(onclick,mainserviceoption);

var states={1:0,2:0};
function navbarOptions(a)
{
  var name="sr"+a;
  var s=document.getElementById(name);
    if(states[a]==0)
    {
      s.style.display="inline-block";
      states[a]=1;
    }
    else if(states[a]==1)
    {
      s.style.display="none";
      states[a]=0;
    }
};

window.addEventListener(onclick,navbarOptions);

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