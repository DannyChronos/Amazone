      // Fonction pour afficher le loader
      function showLoader() {
        document.querySelector(".loader-wrapper").style.display = "flex";
    }
    
    // Fonction pour masquer le loader
    function hideLoader() {
        document.querySelector(".loader-wrapper").style.display = "none";
    }
    
    // Écoutez l'événement de chargement de la page
    window.addEventListener("load", function () {
        hideLoader(); // Cache le loader une fois que la page est complètement chargée
    });
    
    // Exemple d'utilisation lorsque vous naviguez vers une nouvelle page
    function goToPage(url) {
        showLoader(); // Affiche le loader lorsque vous démarrez la transition vers une nouvelle page
        setTimeout(function () {
            window.location.href = url; // Changez l'URL pour naviguer vers la nouvelle page
        }, 5000); // Ce délai est juste pour simuler un chargement, vous pouvez ajuster la durée selon vos besoins
    }
