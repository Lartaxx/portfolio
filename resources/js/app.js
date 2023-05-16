import './bootstrap';

import.meta.glob([
  '../images/**',
]);

const burgerButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
if (burgerButton) {
  const menu = document.getElementById('navbar-default');
  burgerButton.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
}
