// Récupérez tous les éléments de menu
const menuItems = document.querySelectorAll('.menu-items');

// Ajoutez un gestionnaire d'événements de clic à chaque élément de menu
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        // Supprimez la classe "active" de tous les éléments de menu
        menuItems.forEach(menuItem => {
            menuItem.classList.remove('active');
        });

        // Ajoutez la classe "active" à l'élément de menu cliqué
        item.classList.add('active');
    });
});