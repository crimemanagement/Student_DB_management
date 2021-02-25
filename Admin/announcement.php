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
                                <h4 class="page-title">Announcements</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <div class="d-md-flex">
                                    <ol class="breadcrumb ml-auto">
                                        <li><a href="#">Announcements</a></li>
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
                                <div class="col-md-6">
                                <div class="announcement-details">
                                    <div class="media">
                                        <div class="notification-date mr-2" >
                                            <h2>04</h2>
                                            <span>Dec</span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Faculty Name</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante
                                                sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="announcement-details">
                                    <div class="media">
                                        <div class="notification-date mr-2" >
                                            <h2>04</h2>
                                            <span>Dec</span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Faculty Name</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante
                                                sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="announcement-details">
                                    <div class="media">
                                        <div class="notification-date mr-2" >
                                            <h2>04</h2>
                                            <span>Dec</span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Faculty Name</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante
                                                sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="announcement-details">
                                    <div class="media">
                                        <div class="notification-date mr-2" >
                                            <h2>04</h2>
                                            <span>Dec</span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Faculty Name</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante
                                                sollicitudin.</p>
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
                    '#ffaa01',
                    '#105dff'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 0.23)',
                    'rgba(0, 0, 0, 0.23)'
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