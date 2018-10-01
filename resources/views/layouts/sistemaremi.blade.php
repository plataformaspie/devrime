<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="lang="{{ app()->getLocale() }}"">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/img/logo_remi.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>::RIME::</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('sty-mode-3/bootstrap/dist/css/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- This is Sidebar menu CSS -->
    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('sty-mode-2/vendor/plugins/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sty-mode-2/assets/admin-tools/admin-plugins/admin-modal/adminmodal.css') }}">

    <!-- This is a Animation CSS -->
    <link href="{{ asset('sty-mode-3/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('sty-mode-3/css/style.css') }}" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (megna.css) for this starter
         page. However, you can choose any other skin from folder css / colors .
         -->
    <link href="{{ asset('sty-mode-3/css/colors/megna.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
    @yield('header')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view -->
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <!-- Logo -->
                <div class="top-left-part">
                    <a class="logo" href="{{ url('/sistemaremi/index') }}">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b class="m-l-10"><img src="/img/rime.png" height="60" alt="-" /></b>
                        <!-- Logo text image you can use text also -->

                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <!--li>
                        <form method="post" action="/sistemaremi/setIndicadoresSearch" role="search" class="app-search hidden-xs">
                          {{ csrf_field() }}
                            <input type="text" name="buscar" placeholder="Buscar Indicador..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li-->
                </ul>
                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="ti-help-alt"></i> Ayuda
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <!-- .dropdown-messages -->
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">Recursos Ayuda</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="/recursos/Guia_llenado_SistemaRIME_FuenteDatos_V1.pdf" target="_blank">
                                        <div class="user-img"><i class="fa fa-file-pdf-o img-circle"  style="font-size: 30px;"></i> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h6><b style="font-size: 12px;">Guía llenado sistema RIME</b></h6>
                                            <span class="mail-desc">Fecha: 20 Julio 2018</span> <span class="time"> 1.39 MB</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <!--li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li-->
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>

                    <?php /*
                    <!-- .Task dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-note"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="javascript:void(0)">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Task dropdown -->
                    <!-- .user dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.user dropdown-user -->
                    </li>
                    <!-- /.user dropdown -->
                    */ ?>
                    <!-- .Megamenu -->
                    <li class="mega-dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">MOD</span> <i class="fa fa-th"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                          <h5>Módulos activos para su usuario:</h5>
                            @foreach($modulos as $m)
                              <li id="mod-{{ $m["id_html"] }}" class="col-sm-1 text-center">
                                  <ul>
                                      <li class="dropdown-header">
                                        <a href="{{ url($m["url"])}}">
                                        <img class="metro-icon" src="{{ asset('img/'.$m["icono"]) }}" width="60" alt="" />
                                        </a>
                                      </li>
                                      <li><a href="{{ url($m["url"])}}">{{ $m["sigla"] }}</a> </li>
                                  </ul>
                              </li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                          <i class="fa fa-user img-circle"></i> <b class="hidden-xs">{{ Auth::user()->name }}</b>
                        </a>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">


                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>


                    @foreach($menus as $m)
                      <li>
                        @if( $m["submenus"] )
                          <a id="mp-{{ $m["id_html"] }}"  href="{{ url( $m["url"] ) }}" class="waves-effect">
                            <i class="linea-icon {{ $m["class"] }} fa-fw"  data-icon="{{ $m["icono"] }}" style="font-size: 25px"></i>
                            <span class="hide-menu"> {{ $m["titulo"] }} <span class="fa arrow"></span> </span>
                          </a>
                          <ul class="nav nav-second-level">
                            @foreach($m["submenus"] as $sm)
                              <li id="{{ $sm->id }}" ><a href="{{ $sm->url }}">{{ $sm->titulo }}</a></li>
                            @endforeach
                          </ul>
                        @else
                          <a id="mp-{{ $m["id_html"] }}"  href="{{ url( $m["url"] ) }}" class="waves-effect">
                            <i class="linea-icon {{ $m["class"] }} fa-fw" data-icon="{{ $m["icono"] }}" style="font-size: 25px"></i>
                            <span class="hide-menu"> {{ $m["titulo"] }} <span class="fa arrow"></span> </span>
                          </a>
                        @endif
                      </li>
                    @endforeach

                    <!--li>
                        <a href="{{ url('/sistemaremi/index') }}" class="waves-effect">
                            <i class="linea-icon linea-basic fa-fw" data-icon="v" style="font-size: 25px"></i>
                            <span class="hide-menu"> Inicio <span class="fa arrow"></span> </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/sistemaremi/setIndicadores') }}" class="waves-effect">
                          <i  class="linea-icon linea-ecommerce fa-fw" data-icon="U" style="font-size: 25px"></i>
                          <span class="hide-menu"> Indicadores <span class="fa arrow"></span> </span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{ url('/sistemaremi/setIndicadores') }}">Detalle de Indicadores</a> </li>
                            <li> <a href="{{ url('/sistemaremi/adminIndicador') }}">Administrar Indicadores</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/sistemaremi/setFuenteDatos') }}" class="waves-effect">
                          <i  class="linea-icon linea-basic fa-fw" data-icon="&#xe000;" style="font-size: 25px"></i>
                          <span class="hide-menu"> Fuente Datos <span class="fa arrow"></span> </span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{ url('/sistemarime/setFuenteDatos') }}">Detalle de Fuente</a> </li>
                            <li> <a href="{{ url('/sistemarime/adminFuenteDatos') }}">Administrar Fuente</a> </li>
                        </ul>
                    </li-->

                    <!--li>
                        <a href="#4" class="waves-effect">
                          <i  class="linea-icon linea-basic fa-fw" data-icon="&#xe005;" style="font-size: 25px"></i>
                          <span class="hide-menu"> Otros <span class="fa arrow"></span> </span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:win_fuente()"><i  class="fa fa-external-link"></i> Fuente de datos (F8)</a> </li>
                            <li> <a href="javascript:win_pdes()"><i  class="fa fa-list-alt"></i> Codigos PDES (F9)</a> </li>
                        </ul>
                    </li-->

                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
                <!-- .row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> {{ Auth::user()->name }} <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Opciones</b></li>
                            </ul>
                            <ul class="">
                                <li><a href="{{ url('sistemaremi/settingPerfil') }}"><i class="ti-user"></i> Mi perfil</a></li>
                                <li><a href="{{ url('sistemaremi/settingPassword') }}"><i class="ti-wallet"></i> Cambiar contraseña</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/home') }}"><i class="fa icon-logout"></i> Cerrar Modulos </a></li>
                                <li>
                                  <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Cerrar Sesión </a>
                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                  </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Ministerio de Planificación del Desarrollo </footer>
        </div>
        <!-- /#page-wrapper -->


          <div id="window2" class="white-popup-block popup-basic admin-form mfp-with-anim" style="display: none;">
            <div class="panel panel-heading" >
              <section><span class="panel-title"><i class="fa fa-info"></i> Codigos PDES</span></section>
            </div>
            <div id="pdes_info">
              <input id="myInput" type="text" placeholder="Buscar..">
              <table class="table table-hover">
              <thead>
                <tr>
                  <th style="font-family: arial, sans-serif;border: 1px solid #dddddd;">Pilar</th>
                  <th style="font-family: arial, sans-serif;border: 1px solid #dddddd;">Meta</th>
                  <th style="font-family: arial, sans-serif;border: 1px solid #dddddd;">Resultado</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@mail.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@greatstuff.com</td>
                </tr>
                <tr>
                  <td>Anja</td>
                  <td>Ravendale</td>
                  <td>a_r@test.com</td>
                </tr>
              </tbody>
            </table>

            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('sty-mode-3/bootstrap/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('sty-mode-3/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
    <!-- Sidebar menu plugin JavaScript -->
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="{{ asset('sty-mode-3/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>

    <!--Wave Effects -->
    <script src="{{ asset('sty-mode-3/js/waves.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('sty-mode-3/js/custom.min.js') }}"></script>
    <script src="{{ asset('sty-mode-3/js/validator.js') }}"></script>

    @stack('script-head')

    <script type="text/javascript">
      $(document).ready(function(){
         $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
        });
      });

      $(document).keydown(function(tecla){
            if (tecla.keyCode == 120) {
              $.ajax({
                    url: "{{ url('/api/sistemaremi/setPdes') }}",
                    type: "get",
                    dataType: 'json',
                    success: function(data){
                         var offset = $("#side-menu").offset();
                         $("#window2").jqxWindow({ position: { x: parseInt(offset.left) + 30  , y: parseInt(offset.top) + (180) } });
                            $("#window2").css('visibility', 'visible');
                            $('#window2').jqxWindow('open');
                            $('#window2').jqxWindow('focus');
                            $('#myTable').html(data);
                    },
                    error:function(data){
                      if(data.status != 401){
                        alert("Error recuperar los datos.");
                      }else{
                        window.location = '/login';
                      }
                    }
              });
            }
      });

      function createElements() {
           $('#window2').jqxWindow({
               resizable: false,
               isModal: false,
               autoOpen: false,
               width: '15%',
               height: '45%',
               minWidth: 330,
               minHeight: '10%',
               //cancelButton: $("#Cancel"),
               modalOpacity: 0.01,
               draggable: true
           });
           $('#window2').jqxWindow('focus');
       }
       createElements();
       function win_pdes(){
         $.ajax({
               url: "{{ url('/api/sistemaremi/setPdes') }}",
               type: "get",
               dataType: 'json',
               success: function(data){
                    var offset = $("#side-menu").offset();
                    $("#window2").jqxWindow({ position: { x: parseInt(offset.left) + 30  , y: parseInt(offset.top) + (180) } });
                       $("#window2").css('visibility', 'visible');
                       $('#window2').jqxWindow('open');
                       $('#window2').jqxWindow('focus');
                       $('#myTable').html(data);
               },
               error:function(data){
                 if(data.status != 401){
                   alert("Error recuperar los datos.");
                 }else{
                   window.location = '/login';
                 }
               }
         });
       }
    </script>
</body>

</html>
