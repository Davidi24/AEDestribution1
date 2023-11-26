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
                                    <h3>Catriona Henderson</h3>
                                </div>
                            </div>
                            <ul class="list-unstyled components mb-5">
                                <li class="active">
                                    <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
                                </li>
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

                        <!-- Page Content  -->
                        <div id="right_container">
                    kjsbkhfskdhksdsjkd
                    <!-- <div id="prova">
                        <table id="example" class="table table-striped" style="width:100%; border: 1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                    <th>Column 4</th>
                                    <th>Column 5</th>
                                    <th>Column 6</th>
                                    <th>Column 7</th>
                                    <th>Column 8</th>
                                    <th>Column 9</th>
                                    <th>Column 10</th>
                                    <th>Column 11</th>
                                    <th>Column 12</th>
                                    <th>Column 13</th>
                                    <th>Column 14</th>
                                    <th>Column 15</th>
                                    <th>Creation Date</th>
                                </tr>
                            </thead>
                            <tbody id="tablebody">
                            </tbody>
                        </table>
                    </div> -->
                </div>

                    </div>
                </div>

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

    <script>
        function fetchData() {
            fetch('/faturat') // Replace with the correct API endpoint
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById("tablebody")
                    data.faturat.forEach(fatura => {
                        const row = tableBody.insertRow();
                        row.insertCell(0).textContent = fatura.id;
                        row.insertCell(1).textContent = fatura.column1;
                        row.insertCell(2).textContent = fatura.column2;
                        row.insertCell(3).textContent = fatura.column3;
                        row.insertCell(4).textContent = fatura.column4;
                        row.insertCell(5).textContent = fatura.column5;
                        row.insertCell(6).textContent = fatura.column6;
                        row.insertCell(7).textContent = fatura.column7;
                        row.insertCell(8).textContent = fatura.column8;
                        row.insertCell(9).textContent = fatura.column9;
                        row.insertCell(10).textContent = fatura.column10;
                        row.insertCell(11).textContent = fatura.column11;
                        row.insertCell(12).textContent = fatura.column12;
                        row.insertCell(13).textContent = fatura.column13;
                        row.insertCell(14).textContent = fatura.column14;
                        row.insertCell(15).textContent = fatura.column15;
                        row.insertCell(16).textContent = fatura.creation_date;
                        // Add more cells as needed
                    });
                    $(document).ready(function() {
                        $('#example').DataTable({
                            //disable sorting on last column
                            "columnDefs": [{
                                "orderable": false,
                                "targets": 5
                            }],
                            language: {
                                //customize pagination prev and next buttons: use arrows instead of words
                                'paginate': {
                                    'previous': '<span class="fa fa-chevron-left"></span>',
                                    'next': '<span class="fa fa-chevron-right"></span>'
                                },
                                //customize number of elements to be displayed
                                "lengthMenu": 'Display <select class="form-control input-sm">' +
                                    '<option value="5">5</option>' +
                                    '<option value="20">20</option>' +
                                    '<option value="30">30</option>' +
                                    '<option value="40">40</option>' +
                                    '<option value="50">50</option>' +
                                    '<option value="-1">All</option>' +
                                    '</select> results',
                            },
                            "iDisplayLength": 5
                        })
                    });
                })
                .catch(error => console.error('Error:', error));
        }
        window.onload = fetchData;
    </script>

</body>

</html>
