<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Tech
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>

  </style>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white">
            <div class="logo">
                <a class="simple-text logo-normal">
                    DesenvolTech
                </a>
            </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="./profile">
                <i class="material-icons">person</i>
                <p>Perfil</p>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="./dashboard">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./sales">
                <i class="material-icons">shopping_cart</i>
                <p>Vender</p>
                </a>
            </li>
            </ul>
        </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="dashboard">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                        Stats
                    </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        Account
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </form>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">person</i>
                            </div>
                            <p class="card-category">Vendedores cadastrados</p>
                            <h3 class="card-title">{{ $n_user }}
                            </h3>
                            </div>
                            <div class="card-footer">
                            <div class="stats">
                                <!-- <i class="material-icons text-danger">warning</i>
                                <a href="javascript:;">Get More Space...</a> -->
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">shopping_basket</i>
                            </div>
                            <p class="card-category">Vendas realizadas</p>
                            <h3 class="card-title">{{ $n_vendas }}</h3>
                            </div>
                            <div class="card-footer">
                            <div class="stats">
                                <!-- <i class="material-icons">date_range</i> Last 24 Hours -->
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <p class="card-category">Retorno acumulado</p>
                            <h3 class="card-title">R$ {{ $retorno }},00</h3>
                            </div>
                            <div class="card-footer">
                            <div class="stats">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">people</i>
                                </div>
                                <p class="card-category">Comissão acumulada</p>
                                <h3 class="card-title">R$ {{ $comissao}},00</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                            <div class="card-header card-header-tabs card-header-info">
                                <h4 class="card-title">Vendas</h4>
                                <p class="card-category">Registro de todas as vendas</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Vendendor
                                            </th>
                                            <th>
                                                Produtos
                                            </th>
                                            <th style="text-align:center">
                                                Comissão do Vendendor
                                            </th>
                                            <th style="text-align:center">
                                                Valor Total
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach($sales as $sale)
                                                <tr>
                                                    <td>
                                                        {{ $sale->id }}
                                                    </td>
                                                    <td>
                                                        {{ $sale->seller }}
                                                    </td>
                                                    <td>
                                                        {{ $sale->products}}
                                                    </td>
                                                    <td  style="text-align:center">
                                                        R$ {{ $sale->commission}},00
                                                    </td>
                                                    <td class="text-primary" style="text-align:center">
                                                        R$ {{ $sale->price}},00
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <script src="../assets/js/plugins/sweetalert2.js"></script>
    <script src="../assets/js/plugins/jquery.validate.min.js"></script>
    <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="../assets/js/plugins/fullcalendar.min.js"></script>
    <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
    <script src="../assets/js/plugins/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <script src="../assets/demo/demo.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

                }

                $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                    event.stopPropagation();
                    } else if (window.event) {
                    window.event.cancelBubble = true;
                    }
                }
                });

                $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
                });

                $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
                });

                $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                    $sidebar_img_container.fadeIn('fast');
                    $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                    $full_page_background.fadeIn('fast');
                    $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                    $sidebar.removeAttr('data-image');
                    $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                    $full_page.removeAttr('data-image', '#');
                    $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
                });

                $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                    $('body').addClass('sidebar-mini');

                    md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

                });
            });
        });


    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
    </body>

</html>
