$(document).ready(function () {
    $(function () {
        var images = [
            "assets/img/venus.png",
            "assets/img/venus.png",
            "assets/img/venus.png",
            "assets/img/venus.png",
            "assets/img/venus.png",
        ];

        var track = $("#slickTrack");
        images.forEach(function (image) {
            track.append('<div class="slick-item"><img src="' + image + '" alt="Image"></div>');
        });

        // Clonez les images pour rendre le défilement infini
        var clonedImages = images.map(function (image) {
            return '<div class="slick-item"><img src="' + image + '" alt="Image"></div>';
        });
        track.append(clonedImages.join(''));

        var speed = 20; // Vitesse de défilement, ajustez selon vos besoins
        var slickList = $("#slickList");

        function scrollImages() {
            var scrollAmount = 1;
            slickList.scrollLeft(slickList.scrollLeft() + scrollAmount);

            if (slickList.scrollLeft() >= track.width() / 2) {
                slickList.scrollLeft(0);
            }
        }

        var scrollInterval = setInterval(scrollImages, speed);

        // Pause l'animation lorsque la souris survole le conteneur
        slickList.hover(
            function () {
                clearInterval(scrollInterval);
            },
            function () {
                scrollInterval = setInterval(scrollImages, speed);
            }
        );
    });
});