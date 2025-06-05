let menuState = false;

const menuIcon = document.querySelector('img.hamburguer');
const menuLinkContainer = document.querySelector('div.menu-extended');

menuIcon.addEventListener('click', () => {
    const isLocal = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';
    if(!menuState){
        menuState = true;
        isLocal? menuIcon.setAttribute('src', '/Images/close-menu.svg') : menuIcon.setAttribute('src', '/hotelMiranda/Images/close-menu.svg');
        menuIcon.setAttribute("class", "close-icon");
        menuLinkContainer.style.display="inline-block";
        document.body.setAttribute("class", "stop-scrolling");
    } else {
        menuState = false;
        isLocal? menuIcon.setAttribute('src', '/Images/hamburguer.svg') : menuIcon.setAttribute('src', '/hotelMiranda/Images/hamburguer.svg');
        menuIcon.setAttribute("class", "hamburguer");
        menuLinkContainer.style.display="none";
        document.body.setAttribute("class", "");
    }
});