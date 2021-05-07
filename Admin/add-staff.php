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
                                <h4 class="page-title">Add staff</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <div class="d-md-flex">
                                    <ol class="breadcrumb ml-auto">
                                        <li><a href="#">Add Staff</a></li>
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
                        <div class="col-md-12">
                        <div class="add-members">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Staff Members</a>
                                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Add Staff Member</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="faculty-details">
                                    <table class="table table-hover">
                                        <thead class="thead-light">
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
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="login-form">
                        <div class="form">
                            <div class="title">
                                <h2>Registeration</h2>
                            </div>
                                <form id="formvalidationLogin" class="mb-0" novalidate="novalidate">
                                    
                                    <h3>PERSONAL DETAILS</h3>
                                    <div class="form-1">
                                        <div class="form-group">
                                            <lable>First Name</lable>
                                            <input type="text" class="form-control valid" placeholder="Your First Name" name="usernames" id="txtusername" aria-invalid="false">
                                        </div>
                                        <div class="form-group">
                                            <lable>Last Name</lable>
                                            <input type="text" class="form-control valid" placeholder="Your Last Name" name="usernames" id="txtusername" aria-invalid="false">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <lable>Gender</lable>
                                        <br>
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="male">Male</label>

                                        <input type="radio" id="female" name="gender" value="female">
                                        <label for="female">Female</label><br>
                                    </div>

                                    <div class="form-group">
                                            <lable>Upload Your Pic</lable>
                                            <input type="file" class="form-control valid" placeholder="Your Last Name" name="usernames" id="txtusername" aria-invalid="false">
                                        </div>

                                    <h3>COMMUNICATION DETAILS</h3>
                                    
                                    <div class="form-group">
                                            <lable>Contact No</lable>
                                            <input type="number" class="form-control valid" placeholder="Enter Contact Number" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    
                                        
                                            <lable>OTP VERIFY</lable>

                                            <div class="form-group form-2">
                                                <button type="submit">Get OTP</button>
                                                <input type="number" class="form-control valid" placeholder="Enter OTP" name="otp">
                                            </div>
                                       
                                     
                                    
                                    <div class="form-group">
                                        <lable>Email</lable>
                                        <input type="email" class="form-control valid" placeholder="Enter Your Email" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group d-none">
                                        <lable>Adress</lable>
                                        <textarea name="Enter your Address" rows="4" cols="45"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <lable>Department</lable>
                                        <input type="text" class="form-control valid" placeholder="Enter Your College Email" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>

                                    <div class="form-group">
                                        <lable>College ID</lable>
                                        <input type="text" class="form-control valid" placeholder="Enter Your StudentID" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    
                                    <h3>CREATE YOUR LOG-IN DETAILS</h3>

                                    <div class="form-group">
                                        <lable>Email</lable>
                                        <input type="email" class="form-control valid" placeholder="Enter Your College Email" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <lable>Password</lable>
                                        <input type="password" class="form-control pw valid" placeholder="Enter Password" name="password">                                        
                                    </div>
                                    
                                </form>
                                <button type="submit" class="btn" value="submit">REGISTER</button>
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


   
</body>

</html>