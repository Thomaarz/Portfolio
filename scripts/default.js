
window.onscroll = function (event) {
    const client_y = window.scrollY;
    const client_site_height = document.body.clientHeight;
    const client_window_height = window.innerHeight;
    const client_progress_top = (client_y * 100) / client_site_height;
    const client_progress_bottom = ((client_y + client_window_height) / client_site_height) * 100;

    onScrollAnimations(client_y, client_site_height, client_window_height, client_progress_top);
}

window.onmousemove = function (event) {
    const mouse_x = event.clientX;
    const mouse_y = event.clientY;

    onMouseMoveAnimations(mouse_x, mouse_y);
}

window.onkeydown = function(event) {
    const key = event.key;
    const client_window_height = window.innerHeight;
    const client_window_width = window.innerWidth;
}

function setDarkTheme() {

    document.body.style.backgroundColor = '#323232';

    // Black Text
    const blackTextElements = document.querySelectorAll('.black');
    Array.from(blackTextElements).forEach((element, index) => {
        element.classList.remove('black');
        element.classList.add('white');
    });

    // Gray Text
    const grayTextElements = document.querySelectorAll('.gray');
    Array.from(grayTextElements).forEach((element, index) => {
        element.classList.remove('gray');
        element.classList.add('white');
    });

    // Black Shadow
    const blackShadowElements = document.querySelectorAll('.shadow-black');
    Array.from(blackShadowElements).forEach((element, index) => {
        element.classList.remove('shadow-black');
        element.classList.add('shadow-white');
    });

    // BG Black
    const bgBlackElements = document.querySelectorAll('.bg-white');
    Array.from(bgBlackElements).forEach((element, index) => {
        element.classList.remove('bg-white');
        element.classList.add('bg-black');
    });

    // Theme Text
    Array.from(document.getElementsByClassName('theme-switcher')).forEach((element, index) => {
        element.innerHTML = 'Thème Clair';
    });
}

function setLightTheme() {

    document.body.style.backgroundColor = '#f5f5f5';

    // White Text
    const whiteTextElements = document.querySelectorAll('.white');
    Array.from(whiteTextElements).forEach((element, index) => {
        element.classList.remove('white');
        element.classList.add('black');
    });

    // Gray Text
    const grayTextElements = document.querySelectorAll('.gray');
    Array.from(grayTextElements).forEach((element, index) => {
        element.classList.remove('gray');
        element.classList.add('black');
    });

    // White Shadow
    const whiteShadowElements = document.querySelectorAll('.shadow-white');
    Array.from(whiteShadowElements).forEach((element, index) => {
        element.classList.remove('shadow-white');
        element.classList.add('shadow-black');
    });

    // BG White
    const bgWhiteElements = document.querySelectorAll('.bg-black');
    Array.from(bgWhiteElements).forEach((element, index) => {
        element.classList.remove('bg-black');
        element.classList.add('bg-white');
    });

    // Theme Text
    Array.from(document.getElementsByClassName('theme-switcher')).forEach((element, index) => {
        element.innerHTML = 'Thème Sombre';
    });
}