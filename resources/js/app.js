import './bootstrap';

const burgerButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
  const menu = document.getElementById('navbar-default');

  // Ajoutez un écouteur d'événements pour le clic sur le bouton du menu burger
  burgerButton.addEventListener('click', () => {
    // Basculez la classe 'hidden' pour afficher ou masquer le menu
    menu.classList.toggle('hidden');
  });

  Elixir(function(mix) {
    mix.html('storage/framework/views/*', 'storage/framework/views/', {collapseWhitespace: true, removeAttributeQuotes: true, removeComments: true, minifyJS: true});
});
