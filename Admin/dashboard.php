<html>
<!-- head Include Start -->
<?php include('head.php'); ?>
<!-- head Include Start -->

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Menu Include Start -->
            <?php include('Menu.php'); ?>
            <!-- Menu Include End -->

            <div class="main-right">
                <div class="admin-right">
                    <!-- header Include Start -->
                    <?php include('header.php'); ?>
                    <!-- header Include Start -->
                    <input type="checkbox" id="check">
                    <div class="page-breadcrumb bg-white">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <div class="d-md-flex">
                                    <ol class="breadcrumb ml-auto">
                                        <li><a href="#">Dashboard</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="white-box analytics-info">
                                    <h3 class="box-title">Total Students</h3>
                                    <h4 class="counter">1512</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="white-box analytics-info">
                                    <h3 class="box-title">New Students</h3>
                                    <h4 class="counter">151</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="white-box analytics-info">
                                    <h3 class="box-title">Total Course</h3>
                                    <h4 class="counter">12</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="head-list">Professors List</h4>
                                <div class="Professors-list">

                                    <div class="media">
                                        <img class="align-self-center mr-3" src="../Images/pic2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Theodore Handle ( B.Com )</h5>
                                            <p>Available</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="align-self-center mr-3" src="../Images/pic2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Theodore Handle ( B.Com )</h5>
                                            <p>Available</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="align-self-center mr-3" src="../Images/pic2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Theodore Handle ( B.Com )</h5>
                                            <p>Available</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="align-self-center mr-3" src="../Images/pic2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Theodore Handle ( B.Com )</h5>
                                            <p>Available</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h4 class="head-list">Event Calender</h4>
                                <div class="calendar_demo"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/pignose.calendar.full.js"></script>
    <script src="../js/pignose.calendar.full.min.js"></script>
    <script src="../js/pignose.calendar.js"></script>
    <script src="../js/pignose.calendar.min.js"></script>
    <!-- <script src="../js/evo-calendar.js"></script>
    <script src="../js/evo-calendar.min.js"></script> -->
    <script src="../js/all.js"></script>

    <script>
    $(function() {
        $('.calendar_demo').pignoseCalendar();
    });
    </script>

    <!-- <script>
    $(document).ready(function() {
        $('#demoEvoCalendar').evoCalendar({
            theme: 'Midnight Blue'
        })
        $("#demoEvoCalendar").addClass("event-hide");
        $("#eventListToggler").addClass("d-none");
    })
    </script> -->


    <script>
    function openNav() {
        $('.admin-left').attr('style', 'width:0px;');
        $('.main-right').attr('style', 'margin-left:0px;, z-index:999;');
        $('#openNav').attr('style', 'display:none;');
        $('#closeNav').removeClass('close');
    }

    function closeNav() {
        $('.admin-left').attr('style', 'width:260px;');
        $('.main-right').attr('style', 'margin-left:260px;, z-index:999;');
        $('#closeNav').addClass('close');
        $('#openNav').attr('style', 'display:block;');

    }
    </script>
</body>

</html>