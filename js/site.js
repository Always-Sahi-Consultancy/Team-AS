function headerSidelay(){
    var ham_icon=document.getElementById("ham_icon");
    ham_icon.classList.toggle("change");
    var sidelay=document.getElementById("sidelay");
    if(sidelay.width=="100%"){
        sidelay.style.width="0%";
    }
    if(sidelay.width=="0%"){
        sidelay.style.width="100%";
    }
    
}