document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {
  
        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);
  
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
  
      });
    });
  
  });

// Sélectionnez votre élément de navigation
var navbar = document.querySelector('.navbar');

// Récupérez la position de défilement à laquelle vous souhaitez changer de style
var scrollPosition = 50;

// Ajoutez un écouteur d'événement de défilement
window.addEventListener('scroll', function() {
  // Obtenez la position de défilement actuelle
  var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  // Vérifiez si la position de défilement actuelle dépasse la position définie
  if (currentScroll > scrollPosition) {
    // Ajoutez la classe CSS pour changer de style
    navbar.classList.add('scrolled');
  } else {
    // Supprimez la classe CSS si la position de défilement est inférieure à la position définie
    navbar.classList.remove('scrolled');
  }
});
