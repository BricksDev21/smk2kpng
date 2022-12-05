const checkbox = document.querySelector('#mode');
const html = document.querySelector('html');

checkbox.addEventListener('click', function() {
checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
});