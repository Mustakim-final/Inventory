@extends('layouts.masterapp')
@section('content')
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        <form class="navbar-form pull-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                            </div>
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </form>

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                        <small>There are
                                                            <span class="text-primary">2</span> new updates
                                                            available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i
                                        class="md md-crop-free"></i></a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" class="right-bar-toggle waves-effect waves-light"><i
                                        class="md md-chat"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown"
                                    aria-expanded="true"><img src="images/avatar-1.jpg" alt="user-img" class="img-circle">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();
                                        " ><i class="md md-settings-power"></i> Logout</a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="pull-left">
                        <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John
                                Doe <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div
                                            class="ripple-wrapper"></div></a></li>
                                <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class="text-muted m-0">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html" class="waves-effect"><i class="md md-home"></i><span> Dashboard
                                </span></a>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect active"><i class="md md-mail"></i><span> Mail
                                </span><span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul>
                                <li class="active"><a href="inbox.html">Inbox</a></li>
                                <li><a href="email-compose.html">Compose Mail</a></li>
                                <li><a href="email-read.html">View Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar
                                </span></a>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Elements </span>
                                <span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="panels.html">Panels</a></li>
                                <li><a href="checkbox-radio.html">Checkboxs-Radios</a></li>
                                <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="bootstrap-ui.html">BS Elements</a></li>
                                <li><a href="progressbars.html">Progress Bars</a></li>
                                <li><a href="notification.html">Notification</a></li>
                                <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                            </ul>
                        </li>















                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="pull-left page-title">Inbox</h4>
                            <ol class="breadcrumb pull-right">
                                <li><a href="#">Moltran</a></li>
                                <li><a href="#">Mail</a></li>
                                <li class="active">Inbox</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Left sidebar -->

                        <!-- End Left sidebar -->

                        <!-- Right Sidebar -->
                        <div class="col-lg-9 col-md-8">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="btn-toolbar" role="toolbar">





                                    </div>
                                </div>
                            </div> <!-- End row -->

                             <!-- panel -->
                        </div> <!-- end Col-9 -->

                    </div><!-- End row -->



                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2015 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->

        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
