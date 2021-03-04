<html>

<?php include('head.php'); ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('Menu.php'); ?>
            <div class="main-right">
                <?php include('header.php'); ?>
                <div class="page-wrapper">
                    <div class="container-fluid">
                        <div class="main-profile">
                        <div class="set">
                        <h2>About me</h2>
                            <div class="user-function-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Print"><i class="fas fa-print"></i></a></li>
                                        <li><a href="#"data-toggle="tooltip" data-placement="bottom" title="Download"><i class="fas fa-download"></i></a></li>
                                    </ul>
                                </div>
                            </div>     
                        <div class="row">
                            <div class="col-md-12 col-lg-4 mb-3">
                                <div class="user-image">
                                    <img src="../Images/user.png">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="user-details">
                                    <h4><?php  echo $_SESSION["Name"]; ?></h4>
                                    <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun
                                        taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.
                                    </p>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name:</th>
                                                <td><?php  echo $_SESSION["Name"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Student ID.:</th>
                                                <td>124</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Course:</th>
                                                <td>Computer Engg.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Academic Batch</th>
                                                <td>2017 - 2021</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Gender:</th>
                                                <td>Female</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Father Name:</th>
                                                <td>Gulab Rose</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Father Occupation:</th>
                                                <td>Graphic Designer</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Mother Name:</th>
                                                <td>Chameli Rose</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Mother Occupation:</th>
                                                <td>Housewife</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">D.O.B :</th>
                                                <td>01/01/2000</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email:</th>
                                                <td>jrose@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td>Icem Hostel</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Contact No:</th>
                                                <td>+91 1234567890</td>
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

</body>

</html>