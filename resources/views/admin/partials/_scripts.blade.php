<script>
    // Récupérez l'élément d'entrée de recherche
    var input = document.getElementById("searchInput");

    // Récupérez le tableau
    var table = document.querySelector(".lms_table_active");
    var rows = table.getElementsByTagName("tr");

    // Ajoutez un écouteur d'événements pour les modifications de l'entrée
    input.addEventListener("input", function() {
        var filter = input.value.toLowerCase();

        // Parcourez toutes les lignes du tableau, en commençant à partir de la deuxième ligne (index 1)
        for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td"); // Obtenez toutes les cellules de la ligne
        var rowMatchesSearch = false;

        // Parcourez toutes les cellules de la ligne
        for (var j = 0; j < cells.length; j++) {
            var cellText = cells[j].textContent.toLowerCase();
            if (cellText.indexOf(filter) > -1) {
            rowMatchesSearch = true;
            break; // Si une cellule correspond, inutile de vérifier les autres
            }
        }

        // Affichez ou cachez la ligne en fonction des résultats de la recherche
        rows[i].style.display = rowMatchesSearch ? "" : "none";
        }
    });
</script>
<script src="{{ asset('admin/assets/js/active_menu.js')}}"></script>
<script src="{{ asset('admin/assets/js/loader.js')}}"></script>
<!script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{ asset('admin/assets/js/jquery1-3.4.1.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/popper1.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/bootstrap1.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/metisMenu.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/chartlist/Chart.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/count_up/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/swiper_slider/js/swiper.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/gijgo/gijgo.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/chart.min.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/progressbar/jquery.barfiller.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/tagsinput/tagsinput.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/text_editor/summernote-bs4.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/apex_chart/apexcharts.js')}}"></script>
<script src="{{ asset('admin/assets/js/custom.js')}}"></script>
<script src="{{ asset('admin/assets/js/active_chart.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/apex_chart/radial_active.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/apex_chart/stackbar.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/apex_chart/area_chart.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/apex_chart/bar_active_1.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/chartjs/chartjs_active.js')}}"></script>
