// const wslist = document.querySelector('.workshoplist');
// const para = document.querySelectorAll('.workshop-para');
// console.log(para);
// console.log("hi");
// wslist.addEventListener('click', (e) => {
//     if (e.target.parentElement.id == 'ws-1') {
//         const details = document.getElementById('details-1');

//         para[0].style.height = "100px"; 
//         para[0].style.color = "red";
//     }
//     if (e.target.parentElement.id == 'ws-2') {
//         const details = document.getElementById('details-2');
//         para[1].style.height = "100px";
//     }
//     if (e.target.parentElement.id == 'ws-3') {
//         const details = document.getElementById('details-3');
//         para[2].style.height = "100px";
//     }
// });


// console.log(wslist);
const wslist = document.querySelector('.workshoplist');
const para1 = document.getElementbyId('workshop-para1');
const para2 = document.getElementbyId('workshop-para2');
const para3 = document.getElementbyId('workshop-para3');
wslist.addEventListener('click', (e) => {
    if (e.target.parentElement.id == 'ws-1') {
        const details = document.getElementById('details-1');
        para1.style.height = "20vh";
    }
    else {
        para1.style.height = "0vh";
    }
    if (e.target.parentElement.id == 'ws-2') {
        const details = document.getElementById('details-2');
        para2.style.height = "20vh";
    }
    else {
        para2.style.height = "0vh";
    }
    if (e.target.parentElement.id == 'ws-3') {
        const details = document.getElementById('details-3');
        para3.style.height = "20vh";
    }
    else {
        para3.style.height = "0vh";
    }
});


console.log(wslist);