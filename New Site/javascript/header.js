const navigator = function() {
    const nav_bar = document.getElementById("navigation");
    nav_bar.classList.toggle('open');
};

document.getElementById('side_bar').addEventListener('click', navigator);
document.getElementById('close_nav').addEventListener('click', navigator);