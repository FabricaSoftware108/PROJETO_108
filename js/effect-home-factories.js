const rows = [
    { element: document.getElementById('animated-left-js-software'), triggerHeight: 480, type: 'default' },
    { element: document.getElementById('animated-right-js-game'), triggerHeight: 1000, type: 'special' },
    { element: document.getElementById('animated-left-js-grafica'), triggerHeight: 1520, type: 'default' },
    { element: document.getElementById('animated-right-js-audio'), triggerHeight: 2040, type: 'special' }
];

const delay = 1000;

function animatedSoft(element, type) {
    setTimeout(() => {
        element.classList.remove('hidden');
        if (type === 'special') {
            element.classList.add('show', 'animated-all2');
        } else {
            element.classList.add('show', 'animated-all');
        }
    }, delay);
}

function onScroll() {
    const scrollY2 = window.scrollY;
    rows.forEach((row, index) => {
        if (scrollY2 >= row.triggerHeight) {
            animatedSoft(row.element, row.type);
            rows.splice(index, 1); 
        }
    });
    if (rows.length === 0) {
        window.removeEventListener('scroll', onScroll); 
    }
}

window.addEventListener('scroll', onScroll);
