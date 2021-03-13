<html>

<?php include('head.php'); ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('Menu.php'); ?>
            <div class="main-right">
                <div class="admin-right">
                    <?php include('header.php'); ?>
                    <input type="checkbox" id="check">
                    <div class="page-breadcrumb bg-white">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h4 class="page-title">Attendance</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <div class="d-md-flex">
                                    <ol class="breadcrumb ml-auto">
                                        <li><a href="#">Attendance</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content here -->

                <div class="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 mb-3">
                                <div class="student-attandance">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="subject">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                href="#pills-home" role="tab" aria-controls="pills-home"
                                                aria-selected="true">HPC</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                                href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                aria-selected="false">Data Analytics</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                href="#pills-contact" role="tab" aria-controls="pills-contact"
                                                aria-selected="false">Data Mining</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                href="#pills-contact" role="tab" aria-controls="pills-contact"
                                                aria-selected="false">AIR</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                href="#pills-contact" role="tab" aria-controls="pills-contact"
                                                aria-selected="false">STQA</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                href="#pills-contact" role="tab" aria-controls="pills-contact"
                                                aria-selected="false">Soft Skills</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                href="#pills-contact" role="tab" aria-controls="pills-contact"
                                                aria-selected="false">Apptitude</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <div class="white-box sub-details">
                                                <h3 class="box-title">Total Lecture: <span class="total-lec">50</span>
                                                </h3>
                                                <h3 class="box-title">Attand Lecture</h3>
                                                <h4 class="counter">30</h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <div class="white-box sub-details">
                                                <h3 class="box-title">Total Lecture: <span class="total-lec">50</span>
                                                </h3>
                                                <h3 class="box-title">Attand Lecture</h3>
                                                <h4 class="counter">10</h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <div class="white-box sub-details">
                                                <h3 class="box-title">Total Lecture: <span class="total-lec">50</span>
                                                </h3>
                                                <h3 class="box-title">Attand Lecture</h3>
                                                <h4 class="counter">20</h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <div class="white-box sub-details">
                                                <h3 class="box-title">Total Lecture: <span class="total-lec">50</span>
                                                </h3>
                                                <h3 class="box-title">Attand Lecture</h3>
                                                <h4 class="counter">40</h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">
                                            <div class="white-box">
                                                <h3 class="box-title sub-details">Total Lecture: <span
                                                        class="total-lec">50</span>
                                                </h3>
                                                <h3 class="box-title">Attand Lecture</h3>
                                                <h4 class="counter">15</h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/evo-calendar.js"></script>
    <script src="../js/evo-calendar.min.js"></script>
    <script src="../js/all.js"></script>
    <script src="../js/Chart.min.js"></script>


    <script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Present', 'Absent'],
            datasets: [{
                label: 'Attendance',
                data: [66, 34],
                backgroundColor: [
                    '#ff9c30',
                    '#105dff'
                ],
                borderColor: [
                    '#FFF',
                    '#fff'
                ],

                borderWidth: 1
            }]
        },
        options: {

            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]

        }
    });
    </script>
</body>

</html>