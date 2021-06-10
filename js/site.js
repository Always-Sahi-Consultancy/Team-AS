function headerSidelay(){
    var ham_icon=document.getElementById("ham_icon");classList.toggle("change");
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

window.addEventListener(onclick);