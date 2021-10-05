const wslist=document.querySelector('.workshoplist');
wslist.addEventListener('click',(e) => {
    if(e.target.parentElement.id=='ws-1'){
        const details = document.getElementById('details-1');
        if(details.innerText=='Package Escape Funnel'){
            document.getElementById('details-1').innerHTML=`<h3>Package Escape Funnel</h3><p>A series of training program designed, after years of experience and research, to create a pathway for every individual to achieve "A Package Escape" which indeed is our Motto. Consisting of Modules and Sessions from various fields, based on choice and preference of an Individual.</p>`;}
        else{
            document.getElementById('details-1').innerHTML=`<h3>Package Escape Funnel</h3>`;
        }
    }
    if(e.target.parentElement.id=='ws-2'){
        const details = document.getElementById('details-2');
        if(details.innerText=='MStake'){
            document.getElementById('details-2').innerHTML=`<h3>MStake</h3><p>An Initiative introduced to, bring in more Investors as Well as Traders, into the world of Securities market. Providing them the Financial Freedom, and Future Planning. With Ample knowledge and Practical Exposure, Through our Training Program, and Practical Investment Channel.</p>`;}
        else{
            document.getElementById('details-2').innerHTML=`<h3>MStake</h3>`;
        }
    }
    if(e.target.parentElement.id=='ws-3'){
        const details = document.getElementById('details-3');
        if(details.innerText=='Workshops'){
            document.getElementById('details-3').innerHTML=`<h3>Workshops</h3><p>Skill up yourself, with our Short workshops. Short in tenure, Large in Impact. To develop & Nourish skills in your field, we have designed quality based sessions, delivered by Experts.</p>`;}
        else{
            document.getElementById('details-3').innerHTML=`<h3>Workshops</h3>`;
        } 
    }
});


console.log(wslist);