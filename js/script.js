//toggle clas active
const navbarNav = document.querySelector
('.navbar-nav');
// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').
onclick = () => {
    navbarNav.classList.toggle('active')
};

// klik diluar sidebar untuk ilangin hamburgernya
const hamburger = document.querySelector            //ini tuh artinya kalo dibaca tolng panggilin elemet yg nama selektor id nya hamburger-menu
('#hamburger-menu');

document.addEventListener('click', function (e) {
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active')
    }
});