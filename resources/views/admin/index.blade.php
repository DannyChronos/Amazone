<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>GDA ADMIN</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap1.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/themefy_icon/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/swiper_slider/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/niceselect/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/owl_carousel/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/gijgo/gijgo.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/tagsinput/tagsinput.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatable/css/buttons.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/text_editor/summernote-bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/material_icon/material-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>

    <section class="dashboard_part">

        <div class="main_content_iner ">
            <div class="container-fluid body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <div class="modal-content cs_modal">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center fw-bold fs-10">Connexion</h5>
                                        </div>
                                        <div class="modal-body">
                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            <form action="{{ route('login-admin') }}" method="POST">
                                                @csrf
                                                <div class="">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email" required>
                                                </div>
                                                <div class="">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Mot de passe" required>
                                                </div>
                                                <button type="submit" name="login"
                                                    class="btn_1 full_width text-center">Se connecter</button>
                                                <div class="text-center">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#forgot_password" data-bs-dismiss="modal"
                                                        class="pass_forget_btn">Mot de passe oublié ?</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="{{ asset('admin/assets/js/jquery1-3.4.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/metisMenu.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/count_up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/chartlist/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/count_up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/swiper_slider/js/swiper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/gijgo/gijgo.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/progressbar/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/tagsinput/tagsinput.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/apex_chart/apexcharts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/active_chart.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/apex_chart/radial_active.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/apex_chart/stackbar.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/apex_chart/area_chart.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/apex_chart/bar_active_1.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/chartjs/chartjs_active.js') }}"></script>
</body>

</html>
