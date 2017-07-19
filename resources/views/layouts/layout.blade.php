<!DOCTYPE html>
<html>
    <head>
        @include('layouts.head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>E</b>Dm</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">STOCKManager</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="/img/user2-160x160.jpg" class="user-image"/>
                                    <span class="hidden-xs">Gestionnaire de stocks</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="/img/user2-160x160.jpg" class="img-circle"/>
                                        <p>
                                            Gestionnaire de stocks
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="/logout" class="btn btn-default btn-flat">Deconnexion</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            @include('layouts.sidemenu')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content') 
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2017 <a href="http://nexopos.com">NexoPOS solutions</a>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->
        @include('layouts.scripts')
    </body>
</html>
