

// Scroll Event
function onScrollAnimations(client_y, client_site_height, client_window_height, client_progress) {

    const revealFromLeftElements = document.querySelectorAll('.reveal');
    const revealFromRightElements = document.querySelectorAll('.reveal-from-right');
    const revealFromBottomElements = document.querySelectorAll('.reveal-from-bottom');

    // Reveal Elements
    revealElements(revealFromLeftElements, client_window_height);
    revealElements(revealFromRightElements, client_window_height);
    revealElements(revealFromBottomElements, client_window_height);
}

// Mouse Move Event
function onMouseMoveAnimations(mouse_x, mouse_y) {

    // Text
    const revealTextElements = document.querySelectorAll('.text-reveal');
    Array.from(revealTextElements).forEach((element, index) => {

        let rect = element.getBoundingClientRect();
        let offset_y = (rect.y - mouse_y) / 30;

        element.style.transform = 'translateY(' + offset_y + 'px)';
    });

    // Elements
    const moveElements = document.querySelectorAll('.moveable');
    Array.from(moveElements).forEach((element, index) => {

        let rect = element.getBoundingClientRect();
        let offset_x = (rect.x - mouse_x) / 20;
        let offset_y = (rect.y - mouse_y) / 20;

        element.style.transform = 'translateX(' + offset_x + 'px) translateY(' + offset_y + 'px)';
    });
}

// Functions

function revealElements(elements, client_window_height) {
    Array.from(elements).forEach((element, index) => {

        // Y top element
        let y_element = element.getBoundingClientRect().top;
        let y_reveal = 100;

        // Show/Hide Element
        if (y_element < client_window_height - y_reveal) element.classList.add('active');
        else element.classList.remove('active');

    });
}