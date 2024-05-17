const rows = [
    { element: document.getElementById('animated-left-js-software'), triggerHeight: 480 },
    { element: document.getElementById('animated-right-js-game'), triggerHeight: 1000 },
    { element: document.getElementById('animated-left-js-grafica'), triggerHeight: 1520 },
    { element: document.getElementById('animated-right-js-audio'), triggerHeight: 2040 }
];

const delay = 1000;

function animatedSoft(event) {
    setTimeout(() => {
        event.classList.remove('hidden');
        event.classList.add('show', 'animated-all');
    }, delay);
}

function onScroll() {
    const scrollY2 = window.scrollY;

    rows.forEach((row, index) => {
        if (scrollY2 >= row.triggerHeight && !row.triggered) {
            animatedSoft(row.element);
            row.triggered = true;
        }
    });

    if (rows.every(row => row.triggered)) {
        window.removeEventListener('scroll', onScroll);
    }
}

window.addEventListener('scroll', onScroll);
