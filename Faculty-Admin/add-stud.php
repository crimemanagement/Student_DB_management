<?php include('header.php'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-members">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Students</a>
                                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Add Students</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="faculty-details">
                                            <table class="table table-hover student-list">
                                                <thead class="thead-light"> 
                                                    <tr>
                                                        <th scope="col">ID.</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Gedner</th>
                                                        <th scope="col">Dept</th>
                                                        <th scope="col">Batch</th>
                                                        <th scope="col">College ID</th> 
                                                        <th scope="col">Contact No</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Harsh Lalwala</td>
                                                        <td>Male</td>
                                                        <td>Comp</td>
                                                        <td>2017-21</td>
                                                        <td>ABCD1234</td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                        <td>Surat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Vandan Vaishya</td>
                                                        <td>Male</td>
                                                        <td>Comp</td>
                                                        <td>2017-21</td>
                                                        <td>ABCD1234</td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                        <td>Veraval</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Shivam Yadav</td>
                                                        <td>Male</td>
                                                        <td>Comp</td>
                                                        <td>2017-21</td>
                                                        <td>ABCD1234</td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                        <td>Pune</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Jatin Nathani</td>
                                                        <td>Male</td>
                                                        <td>Comp</td>
                                                        <td>2017-21</td>
                                                        <td>ABCD1234</td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                        <td>Mumbai</td>
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
                                        <lable>Father's Name</lable>
                                        <input type="text" class="form-control valid" placeholder="Father's Name" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <lable>Father's Occupation</lable>
                                        <input type="text" class="form-control valid" placeholder="Father's Occupation" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <lable>Mother's Name</lable>
                                        <input type="text" class="form-control valid" placeholder="Mother's Name" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    
                                    <div class="form-group">
                                        <lable>Mother's Occupation</lable>
                                        <input type="text" class="form-control valid" placeholder="Mother's Occupation" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <lable>D.O.B</lable>
                                        <input type="date" class="form-control valid" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <lable>Gender</lable>
                                        <br>
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="male">Male</label>

                                        <input type="radio" id="female" name="gender" value="female">
                                        <label for="female">Female</label><br>
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
                                        <lable>StudentID</lable>
                                        <input type="text" class="form-control valid" placeholder="Enter Your StudentID" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <lable>Course</lable>
                                        <input type="text" class="form-control valid" placeholder="Enter Your Course" name="usernames" id="txtusername" aria-invalid="false">
                                    </div>
                                    <div class="form-group">
                                        <lable>Academic Batch</lable>
                                        <input type="text" class="form-control valid" placeholder="Enter Your College Email" name="usernames" id="txtusername" aria-invalid="false">
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
    
    
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    
    <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>