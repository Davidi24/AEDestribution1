


<div class="page-header" style="margin-top: 0px;">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Data Tables</h3>
                            <div class="FilterContainer">
                                <div class="reservation-box">
                                    <div class="top">
                                        <div class="static">
                                            <label for="date-from" id="fromdate">From Date:</label>
                                            <div class="input-container" id="date-picker-container">

                                                <input type="date" id="date-checkin" class="date-field fromdateinput" name="date-from">
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <label for="date-from" id="todate">To Date:</label>
                                            <div class="input-container" id="date-picker-container">

                                                <input type="date" id="date-checkout" class="date-field todateinput" name="">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <button id="filterButton">Filter</button>
                                <button id="clearButton">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row" style="margin-top: -30px;">
                    <div class="col-sm-12 prova">
                        <div class="card mb-0">

                            <div class="card-body">

                                <div class="table-responsive">

                                    <table id="example" class="table datatable table table-stripped table-bordered mb-0">
                                        <div class="searchTable">
                                            <button id="excel">Exel</button>
                                            <label for="search">Search</label>
                                            <input type="text" id="searchTableButton">
                                        </div>
                                        <thead>
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
                                        </thead>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                        <tfoot>
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

                <!-- Page Header -->

            </div>


  <!-- jQuery -->
  <script src="{{ asset('home/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script> -->



    <!-- Bootstrap Core JS -->
    <script src="{{ asset('home/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/bootstrap.min.js') }}"></script>


    <!-- Slimscroll JS -->
    <script src="{{ asset('home/assets/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="home/assets/js/app.js"></script>\

    <!-- SideBar -->
    <script type="module" src="{{ asset('js/SideBar/clients.min.js') }}"></script>
    <script type="module" src="{{ asset('js/ChangePages/sidebarChangePages.min.js') }}"></script>

<!-- Datatable JS -->
<script src="{{ asset('home/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/dataTables.bootstrap4.min.js') }}"></script>
