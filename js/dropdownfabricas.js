const dropdown = document.querySelector('.dropdown');
const dropdownMenu = dropdown.querySelector('.dropdown-menu');

let timeout;

dropdown.addEventListener('mouseover', function() {
    dropdownMenu.style.display = 'block';
    clearTimeout(timeout);
});

dropdown.addEventListener('mouseout', function() {
    timeout = setTimeout(function() {
        dropdownMenu.style.display = 'none';
    }, 300);
});


