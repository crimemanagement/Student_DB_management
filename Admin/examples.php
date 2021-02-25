<?php
	session_start();
	include("../Connection.php");
?>
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
            <div class="col-md-10 p-0">
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
                    <!-- content here -->
                </div>
            </div>
        </div>



        <script src="../js/jquery-3.5.1.js"></script>
        <script src="../js/evo-calendar.js"></script>
        <script src="../js/evo-calendar.min.js"></script>
        <script src="../js/all.js"></script>


</body>

</html>