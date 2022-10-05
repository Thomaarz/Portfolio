var theme = 'Sombre';

const show_menu_btn = document.getElementById('show-modal-navigation-btn');
const hide_menu_btn = document.getElementById('hide-modal-navigation-btn');
const theme_switchers_btn = document.getElementsByClassName('theme-btn');

const modal_navigation = document.getElementById('modal-navigation');
const left_bar = document.getElementById('left-bar');
const theme_switchers = document.getElementsByClassName('theme-switcher');

/* EVENTS */
show_menu_btn.addEventListener('click', () => {

    openModalNavigation();

});

hide_menu_btn.addEventListener('click', () => {

    closeModalNavigation();

});

Array.from(theme_switchers_btn).forEach((element, index) => {
    element.addEventListener('click', () => {
        if (theme === 'Clair') {
            theme = 'Sombre';
            Array.from(theme_switchers).forEach((element2, index) => {
                element2.innerHTML = 'Thème<br/>Clair';
            });
            setDarkTheme();
        } else {
            theme = 'Clair';
            Array.from(theme_switchers).forEach((element2, index) => {
                element2.innerHTML = 'Thème<br/>Sombre';
            });
            setLightTheme();
        }
    })
});

/* FUNCTIONS */
function openModalNavigation() {
    left_bar.style.transform = 'translateX(-200%)';

    modal_navigation.style.zIndex = '2';
    modal_navigation.style.width = '100%';
}

function closeModalNavigation() {
    left_bar.style.transform = 'translateX(0)';

    modal_navigation.style.width = '1%';
    setTimeout(() => {
        modal_navigation.style.zIndex = '-2';
    }, 500);
}