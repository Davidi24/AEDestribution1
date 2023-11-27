<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/table.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Data Table CSS -->
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Call Side Bar Css -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sideBar/style.css">
    <link rel="stylesheet" href="css/sideBar/clients.css">
    <style>
        #prova {
            height: 89vh;
            overflow: scroll;
        }

        #example {
            border: 1px;
        }

        .active>.page-link,
        .page-link.active {
            background-color: #7d2ae8 !important;
        }

        .page-link {
            color: #7d2ae8;
        }
    </style>
</head>
</head>

<body>

    <!-- ////////////////////////////////////////////////////////////////////////////  -->
    <!-- Change passwor -->
    <section class="home1">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- Login From -->
            <div class="form login_form">
                <form>
                    <h2>ChangePassword</h2>
                    <div id="error"></div>
                    <div class="input_box">
                        <input id="password" type="password" placeholder="Enter your new password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input id="repeat_password" type="password" placeholder="Repeat your password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <button class="button" id="loginbutton">Change Password</button>
                </form>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////  -->







        <!-- ////////////////////////////////////////////////////////////////////////////  -->
        <!--Table-->
        <!-- <div id="container">
            <div id="header">Header</div>
            <div id="body_container"> -->
        <!--Side Bar-->
        <div class="CONTAINER">
        <div id="left_container">

            <div class="wrapper d-flex align-items-stretch">
                <nav id="sidebar">
                    <div class="custom-menu">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        </button>
                    </div>
                    <div class="img bg-wrap text-center py-4" style="background-image: url(images/sideBar/bg_1.jpg);">
                        <div class="user-logo">
                            <div class="img" style="background-image: url(images/sideBar/logo.jpg);"></div>
                            <h3>AEDestribution</h3>
                        </div>
                    </div>
                    <ul class="list-unstyled components mb-5">
                        <div class="clients_wrapper">
                            <li class="active">
                                <a href="#"><span class="fa fa-home mr-3"></span> Clients</a>
                            </li>
                            <div id="clients">
                            </div>
                        </div>
                        <li>
                            <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                        </li>
                    </ul>

                </nav>
            </div>
            <!-- Page Content  -->
        </div>



        <div class="right_container">
            <div class="right_headerr">lll</div>

            <div class="filter">Filter</div>
            <div>Table</div>

        </div>
 </div>
    </section>
    <!-- ////////////////////////////////////////////////////////////////////////////  -->


    <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
    <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
    <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/SideBar/jquery.min.js') }}"></script>
    <script src="{{ asset('js/SideBar/popper.js') }}"></script>
    <script src="{{ asset('js/SideBar/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/SideBar/main.js') }}"></script>
    <script src="{{ asset('js/SideBar/clients.min.js') }}"></script>
    <script src="{{ asset('js/Table/putInfo.min.js') }}"></script>
    <script src="{{ mix('resources/js/clients.js') }}"></script>



</body>

</html>
