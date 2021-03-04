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
                                <h4 class="page-title">Exam</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <div class="d-md-flex">
                                    <ol class="breadcrumb ml-auto">
                                        <li><a href="#">Exam</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content here -->

                <div class="page-wrapper">
                    <div class="container-fluid main-test">
                        <div class="row"> 
                            <div class="col-md-12 d-flex" style="justify-content: space-between; align-items: center;">
                                <div class="faculty">
                                    <h2>Exam</h2>
                                </div>
                                <div class="user-function-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Print"><i class="fas fa-print"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="test-area">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">HPC</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">Data Analytics</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">Data Mining</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">AIR</a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                            aria-selected="false">STQA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="exam-section">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Time Limit</th>
                                                        <th scope="col">Link</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>01/01/2020</td>
                                                        <td>30 Min</td>
                                                        <td><a href="#" class="btn">Attend the Test</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>01/01/2020</td>
                                                        <td>30 Min</td>
                                                        <td><a href="#" class="btn">Attend the Test</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>01/01/2020</td>
                                                        <td>30 Min</td>
                                                        <td><a href="#" class="btn">Attend the Test</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>01/01/2020</td>
                                                        <td>30 Min</td>
                                                        <td><a href="#" class="btn">Attend the Test</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>01/01/2020</td>
                                                        <td>30 Min</td>
                                                        <td><a href="#" class="btn">Attend the Test</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>01/01/2020</td>
                                                        <td>30 Min</td>
                                                        <td><a href="#" class="btn">Attend the Test</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Time Limit</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Time Limit</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Time Limit</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>01/01/2020</td>
                                                            <td>30 Min</td>
                                                            <td><a href="#" class="btn">Attend the Test</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                label: '# of Votes',
                data: [66, 34],
                backgroundColor: [
                    'rgba(112, 253, 255, 1)',
                    'rgba(255, 66, 66, 1)'
                ],
                borderColor: [
                    'rgba(0, 0, 0,0.1);',
                    'rgba(0, 0, 0,0.1);'
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