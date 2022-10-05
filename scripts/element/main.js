
const header_title = document.getElementById('header-title');

/* CALLS */
printLetterByLetter(header_title.id, 'Hey,_Je suis Thomaarz.', 200, 40);
coloredLetter(header_title.id, '#161616', 1200, 40);
showHeaderText(400 + (40 * 22))


/* FUNCTIONS */
function printLetterByLetter(element_id, message, after, speed) {
    let i = 0;
    setTimeout(() => {
        let interval = setInterval(function() {
            let target = document.getElementById(element_id);

            target.innerHTML += '<span id="' + element_id + '-' + i + '">' + message.charAt(i++).replace('_', '<br/>') + '</span>';
            if (i > message.length) clearInterval(interval);

        }, speed);
    }, after);
}

function coloredLetter(element_start_id, after, delai) {
    for (let i = 0; i < 10000; i++) {
        const interval = setInterval(function() {

            let target = document.getElementById(element_start_id + '-' + i);

            if (target === null) clearInterval(interval);
            else target.style.color = color;

        }, after + delai * i);
    }
}

function showHeaderText(after) {
    let i = 0;
    setTimeout(() => {
        const headerRevealElements = document.querySelectorAll('.header-reveal');
        Array.from(headerRevealElements).forEach((element, index) => {
            setTimeout(() => {
                element.classList.add('active');

                if (index === (headerRevealElements.length - 1)) loadElements();
            }, 200 * i);
            i++;
        });
    }, after);
}

function loadElements() {
    let header_img = document.getElementById('header-img');
    header_img.style.transition = 'all 0s';
}

setDarkTheme();