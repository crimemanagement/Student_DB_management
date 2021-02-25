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
                                <h4 class="page-title">Faculty</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <div class="d-md-flex">
                                    <ol class="breadcrumb ml-auto">
                                        <li><a href="#">Faculty</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content here -->

                <div class="page-wrapper">
                    <div class="container-fluid main-faculty">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faculty">
                                    <h2>All Faculty Data</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="faculty-search">
                                    <div class="input-group md-form form-sm form-2 pl-0">
                                        <input class="form-control" type="text" placeholder="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-text1"><i
                                                    class="fas fa-search text-grey"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="faculty-details">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID.</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Gedner</th>
                                                <th scope="col">Class</th>
                                                <th scope="col">subject</th>
                                                <th scope="col">Section</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img src="../Images/user.png"></td>
                                                <td>Faculty 1</td>
                                                <td>Male</td>
                                                <td>BE</td>
                                                <td>HPC</td>
                                                <td>A & B</td>
                                                <td><a href="#">123@indiraicem.ac.in</a></td>
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
                    '#ff8f16',
                    '#105dff'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 0.23)',
                    'rgba(0, 0, 0, 0.23)'
                ],

                borderWidth: 3
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