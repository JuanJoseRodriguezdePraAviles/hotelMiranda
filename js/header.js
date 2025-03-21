let menuState = false;

const menuIcon = document.querySelector('img.hamburguer');
const menuLinkContainer = document.querySelector('div.menu-extended');

menuIcon.addEventListener('click', () => {
    if(!menuState){
        menuState = true;
        menuIcon.setAttribute('src', '/hotelMiranda/../Images/close-menu.svg');
        menuIcon.setAttribute("class", "close-icon");
        menuLinkContainer.style.display="inline-block";
    } else {
        menuState = false;
        menuIcon.setAttribute('src', '/hotelMiranda/../Images/hamburguer.svg');
        menuIcon.setAttribute("class", "hamburguer");
        menuLinkContainer.style.display="none";
    }
});

