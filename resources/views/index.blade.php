<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Data Table </title>
    <meta content="" name="description">
    <meta content="Author" name="MJ Maraz">

    <!-- Google Fonts -->

    <!-- ========================================================= -->

    <link rel="stylesheet" href="css/Table/style.css">






    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/login.css" />
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

    <!-- Call Side Bar Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
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
        <div class="Big_Contrainer">
            <div id="left_container">

                <div class="wrapper d-flex align-items-stretch">

                    <nav id="sidebar">
                        <div class="custom-menu">

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
                                <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span>Prova0</a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-gift mr-3"></span>Prova1</a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-trophy mr-3"></span>Prova2</a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-cog mr-3"></span>Prova3</a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-support mr-3"></span>Prova4</a>
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



                <div class="right_right_container">

                    <div class="right_headerr">lll</div>
                    <div class="filter">
                        <div class="reservation-box">
                            <div class="top">
                                <div class="static">
                                    <div class="input-container" id="date-picker-container">
                                        <label for="date-from">check-in</label>
                                        <input type="date" id="date-checkin" class="date-field" name="date-from">
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="input-container" id="date-picker-container">
                                        <label for="date-from">check-out</label>
                                        <input type="date" id="date-checkout" class="date-field" name="">
                                    </div>
                                    <div>
                                        <button id="filter_button">Filter</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="faturat_table">


                            <div class="container">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="position: relative; overflow: hidden;">
                                            <th>id</th>
                                            <th>request</th>
                                            <th>response</th>
                                            <th>type</th>
                                            <th>vatnumber</th>
                                            <th>businessunit</th>
                                            <th>tcr</th>
                                            <th>aedid</th>
                                            <th>createdat</th>
                                            <th>status</th>
                                            <th>lastretry</th>
                                            <th>retrynr</th>
                                            <th>extrafields</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                    <tfoot style="position: relative; overflow: hidden;">
                                        <tr>
                                            <th>id</th>
                                            <th>request</th>
                                            <th>response</th>
                                            <th>type</th>
                                            <th>vatnumber</th>
                                            <th>businessunit</th>
                                            <th>tcr</th>
                                            <th>aedid</th>
                                            <th>createdat</th>
                                            <th>status</th>
                                            <th>lastretry</th>
                                            <th>retrynr</th>
                                            <th>extrafields</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- ////////////////////////////////////////////////////////////////////////////  -->



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/SideBar/popper.js') }}"></script>
    <script src="{{ asset('js/SideBar/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/SideBar/main.js') }}"></script>
    <script type="module" src="{{ asset('js/SideBar/clients.min.js') }}"></script>
    <script type="module" src="{{ asset('js/Table/putInfo.min.js') }}"></script>
    <script type="module" src="{{ asset('js/Table/filterTableDate.min.js') }}"></script>



</body>

</html>
