<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stock Management showcase</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <script src="{{ asset('js/everythingSangitLesuJS.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('styleResource/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('styleResource/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/everythingSangitCSS.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <style>
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: green;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 15px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframesfadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframesfadein {
            from {
                bottom: 0;
                opacity: 0;
            }
            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframesfadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframesfadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }
            to {
                bottom: 0;
                opacity: 0;
            }
        }

        .spinner {
            width: 55px;
            height: 55px;

            z-index: 9999;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: fixed;
            display: block;
            margin: auto;
        }

        .double-bounce1,
        .double-bounce2 {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: darkred;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;

            -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
            animation: sk-bounce 2.0s infinite ease-in-out;
        }

        .double-bounce2 {

            background-color: #0b3e6f;

        }

        .double-bounce2 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        @-webkit-keyframessk-bounce {
        0%,
        100% {
            -webkit-transform: scale(0.0)
        }
        50% {
            -webkit-transform: scale(1.0)
        }
        }

        @keyframessk-bounce {
        0%,
        100% {
            transform: scale(0.0);
            -webkit-transform: scale(0.0);
        }
        50% {
            transform: scale(1.0);
            -webkit-transform: scale(1.0);
        }
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 54px;
            height: 27px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: green;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

    <!-- Google Font -->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
        {{-- <span class="logo-mini"><img src="#" width="50px" height="40px"></span> --}}

        <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Sangit</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <li class="dropdown user user-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user-circle-o"> Admin</i></a>

                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="employee_images/photo_default_emplyee1.png" class="img-circle" alt="User Image">

                                <p>
                                    Admin
                                    <small>github.com/sangit0</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">

                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    {{-- <a href="{{URL::to('/logout')}}" class="btn btn-default btn-flat">Sign out</a> --}}
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../employee_images/photo_default_emplyee1.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Sangit</p>
                    <small>Developer</small>

                </div>
            </div>

            <ul class="sidebar-menu " data-widget="tree">


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Stock</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('/add-stock')}}"><i class="fa fa-clone"></i> Add stock</a></li>
                        <li><a href="{{URL::to('/stock-manage')}}"><i class="fa fa-leaf"></i> Manage stock</a></li>
                    </ul>
                </li>



                <li>
                    <a href="{{URL::to('/settings')}}">
                        <i class="fa fa-cogs"></i>
                        <span>Settings</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::to('/customer')}}">
                        <i class="fa fa-cogs"></i>
                        <span>Customers</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::to('/settings')}}">
                        <i class="fa fa-cogs"></i>
                        <span>Reports</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/sendemail')}}">
                        <i class="fa fa-cogs"></i>
                        <span>Complaints</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-tint"></i>
                        <span> Supplyers</span>
                        <span class="pull-right-container">
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::to('/supplyer')}}"><i class="fa fa-clone"></i> Manage supplyers</a></li>
                        <li><a href="{{URL::to('/supplyerPayment')}}"><i class="fa fa-money"></i> Payment</a></li>
                    </ul>
                </li>
            </ul>

        </section>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">{{Request::path()}}</li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <br>




            <div class="container" style="width: 1000px">
                <div class = "card-panel cyan darken-4"  ><h3 style="text-align: center;color: white">Add New Customer</h3></div>



                <div class = "card-panel center">
                    <div class="row">
                        <form class="col s12" method="POST" action="{{url('/customer')}}">
                            {{ csrf_field() }}
                            <div class="row">

                                <div class="input-field col s6">
                                    <!--<i class="material-icons prefix" >account_circle</i>-->
                                    <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
                                    <label for="firstname">Name</label>

                                </div>
                                <div class="input-field col s6">
                                    <!--<i class="material-icons prefix">account_circle</i>-->
                                    <input id="email" type="email"   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    <label for="email">Email</label>


                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <!-- <i class="material-icons prefix">home</i> -->

                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                    <label for="address">Address</label>

                                </div>
                                <div class="input-field col s6">
                                    <!--<i class="material-icons prefix">phone</i>-->

                                    <input id="telephone" pattern="[0]{1}[1-9]{2}[0-9]{7}" minlength="10" type="text" class="form-control{{ $errors->has('tp') ? ' is-invalid' : '' }}" name="tp" value="{{ old('tp') }}" required autofocus>

                                    <label for="telephone">Telephone</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <!-- <i class="material-icons prefix">home</i> -->

                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                    <label for="username">Username</label>

                                </div>
                                <div class="input-field col s6">
                                    <!--<i class="material-icons prefix">phone</i>-->

                                    <input id="password"  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                                    <label for="password">Password</label>

                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn blue right" value="Save">
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>






        </section>
        <!-- /.content -->
        <div id="snackbar">Data updated successfully.</div>

    </div>



    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0 Beta
        </div>
        <strong>Copyright &copy; 2018 <a href="https://github.com/sangit0">Sangit</a>.</strong> All rights reserved.
    </footer>

    <!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<script>
    $(function() {
        dinamicMenu();

        $(".spinner").css("display", "none");

    });

    $(document).ready(function() {
        $(document).ajaxStart(function() {
            $(".spinner").css("display", "block");
        });
        $(document).ajaxComplete(function() {
            $(".spinner").css("display", "none");
        });

    });

    function showSnakBar() {
        var x = document.getElementById("snackbar")
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 3000);
    }

    function dinamicMenu() {
        var url = window.location;

        $('ul.sidebar-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        // Will only work if string in href matches with location
        $('.treeview-menu li a[href="' + url + '"]').parent().addClass('active');
        // Will also work for relative and absolute hrefs
        $('.treeview-menu li a').filter(function() {
            return this.href == url;
        }).parent().parent().parent().addClass('active');
    };
</script>
</body>

</html>
