<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        DesenvolTech
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <style>
         body {
            font-family: "Roboto", sans-serif;
            background-color: #fafafa;
        }

        .select-wrapper {
            margin: 150px auto;
            max-width: 600px;
            width: calc(100% - 40px);
        }

        .select-pure__select {
            align-items: center;
            background: #f9f9f8;
            border-radius: 4px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
            box-sizing: border-box;
            color: #363b3e;
            cursor: pointer;
            display: flex;
            font-size: 16px;
            font-weight: 500;
            justify-content: left;
            min-height: 44px;
            padding: 5px 10px;
            position: relative;
            transition: 0.2s;
            width: 100%;
        }

        .select-pure__options {
            border-radius: 4px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
            box-sizing: border-box;
            color: #363b3e;
            display: none;
            left: 0;
            max-height: 221px;
            overflow-y: scroll;
            position: absolute;
            top: 50px;
            width: 100%;
            z-index: 5;
        }

        .select-pure__select--opened .select-pure__options {
            display: block;
        }

        .select-pure__option {
            background: #fff;
            border-bottom: 1px solid #e4e4e4;
            box-sizing: border-box;
            height: 44px;
            line-height: 25px;
            padding: 10px;
        }

        .select-pure__option--selected {
            color: #e4e4e4;
            cursor: initial;
            pointer-events: none;
        }

        .select-pure__option--hidden {
            display: none;
        }

        .select-pure__selected-label {
            background: #5e6264;
            border-radius: 4px;
            color: #fff;
            cursor: initial;
            display: inline-block;
            margin: 5px 10px 5px 0;
            padding: 3px 7px;
        }

        .select-pure__selected-label:last-of-type {
            margin-right: 0;
        }

        .select-pure__selected-label i {
            cursor: pointer;
            display: inline-block;
            margin-left: 7px;
        }

        .select-pure__selected-label i:hover {
            color: #e4e4e4;
        }

        .select-pure__autocomplete {
            background: #f9f9f8;
            border-bottom: 1px solid #e4e4e4;
            border-left: none;
            border-right: none;
            border-top: none;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
            padding: 10px;
            width: 100%;
        }
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
            <li class="nav-item">
                <a class="nav-link" href="./dashboard">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item active">
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
                <a class="navbar-brand" >Vender</a>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-info">
                                <h4 class="card-title">Venda</h4>
                                <p class="card-category">Adicione os dados da venda</p>
                            </div>
                            <form method="POST" name=form1 action="{{ route('product') }}">
                                <div class="card-body">
                                        @csrf
                                            <label>Vendedor</label>
                                            <div class="form-group">
                                                <select id="seller" name="seller" class="custom-select" >
                                                    @foreach($user as $user)
                                                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class=" text-primary">
                                                        <th>
                                                            Selecionar
                                                        </th>
                                                        <th>
                                                            Nome
                                                        </th>
                                                        <th>
                                                            Categoria
                                                        </th>
                                                        <th>
                                                            Preço
                                                        </th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($products as $product)
                                                            <tr>
                                                                <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" name="ckb" value="{{ $product->name }}" id="{{ $product->price }}" category="{{ $product->category }}" onclick="chkcontrol(this.id, this.value )" >
                                                                    <input type="hidden" id="comissão" name="comissão" value="{{ $product->commission }}" >
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                    </label>
                                                                </div>
                                                                </td>
                                                                <td>
                                                                    {{ $product->name}}
                                                                </td>
                                                                <td>
                                                                    <span id="category" >{{ $product->category}}</span>
                                                                </td>
                                                                <td class="text-primary">
                                                                    R$ {{ $product->price}},00
                                                                </td>
                                                            </tr>

                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div id="msg" style="font-size:18px"></div>
                                                <div id="produtosF"></div>
                                                <input type="hidden" id="products" name="products" value="" >
                                                <input type="hidden" id="price" name="price" value="" >
                                                <input type="hidden" id="commission" name="commission" value="" >
                                            </div>
                                </div>
                                <div class="card-footer ">
                                        <input type="submit" class="btn btn-info btn-block"  onclick="md.showNotification('top','center')" value="Vender">
                                </div>
                            </form>
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
    <script src="https://www.cssscript.com/demo/multi-select-autocomplete-selectpure/bundle.min.js"></script>
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
        function chkcontrol(j, y) {
            var array = [];
            var checkboxes = document.querySelectorAll('input[type=checkbox]:checked')
            var sum = 0;
            var commission = 0;
            for(var i=0; i < document.form1.ckb.length; i++){
                if(document.form1.ckb[i].checked){
                    sum = sum + parseInt(document.form1.ckb[i].id);
                    commission = commission + parseInt(document.form1.comissão[i].value);
                    // console.log(document.form1.commission[i].value);
                }

                document.getElementById("msg").innerHTML="<strong>Valor Total:</strong> R$ " + sum + ",00";
                document.getElementById("price").value = sum ;
            }
            for (var i = 0; i < checkboxes.length; i++) {
                array.push(checkboxes[i].value)
            }
            document.getElementById("produtosF").innerHTML="<strong>Equipamentos selecionados:</strong> " + array;
            document.getElementById("products").value = array;
            document.getElementById("commission").value = commission;
            console.log(document.getElementById("commission").value);
        }
</script>
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
    </body>

</html>
