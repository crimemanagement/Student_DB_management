 
<?php include('header.php'); ?>
        <div class="page-wrapper">
            <div class="attandence-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">TE-1</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">TE-2</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">BE-1</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">BE-2</a>
                              </div>
                        </div>
                        <div class="col-md-10">
                            <div class="student-attandence-main">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="col-md-12 p-0">
                                        <div class="faculty-search">
                                            <div class="input-group md-form form-sm form-2 pl-0">
                                                <input class="form-control search-input" type="text" placeholder="Search" data-table="student-list">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-text1"><i
                                                            class="fas fa-search text-grey"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-0">
                                        <div class="faculty-details">
                                            <table class="table table-bordered student-list">
                                                <thead class="thead-light"> 
                                                    <tr>
                                                        <th scope="col">ID.</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Gedner</th>
                                                        <th scope="col">Date</th> 
                                                        <th scope="col">Attandance</th>
                                                        <th scope="col">Contact No</th>
                                                        <th scope="col">Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Harsh Lalwala</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Jatin Nathani</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Vandan Vaishya</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Shivam Yadav</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Harsh Lalwala</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Jatin Nathani</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Vandan Vaishya</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>Shivam Yadav</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="col-md-12">
                                        <div class="faculty-search">
                                            <div class="input-group md-form form-sm form-2 pl-0">
                                                <input class="form-control" type="text" placeholder="Search" data-table="student-list">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-text1"><i
                                                            class="fas fa-search text-grey"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="faculty-details">
                                            <table class="table table-bordered student-list">
                                                <thead class="thead-light"> 
                                                    <tr>
                                                        <th scope="col">ID.</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Gedner</th>
                                                        <th scope="col">Date</th> 
                                                        <th scope="col">Attandance</th>
                                                        <th scope="col">Contact No</th>
                                                        <th scope="col">Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO1</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div class="col-md-12">
                                        <div class="faculty-search">
                                            <div class="input-group md-form form-sm form-2 pl-0">
                                                <input class="form-control" type="text" placeholder="Search" data-table="student-list">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-text1"><i
                                                            class="fas fa-search text-grey"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="faculty-details">
                                            <table class="table table-bordered student-list">
                                                <thead class="thead-light"> 
                                                    <tr>
                                                        <th scope="col">ID.</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Gedner</th>
                                                        <th scope="col">Date</th> 
                                                        <th scope="col">Attandance</th>
                                                        <th scope="col">Contact No</th>
                                                        <th scope="col">Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO2</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <div class="col-md-12">
                                        <div class="faculty-search">
                                            <div class="input-group md-form form-sm form-2 pl-0">
                                                <input class="form-control" type="text" placeholder="Search" data-table="student-list">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-text1"><i
                                                            class="fas fa-search text-grey"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="faculty-details">
                                            <table class="table table-bordered student-list">
                                                <thead class="thead-light"> 
                                                    <tr>
                                                        <th scope="col">ID.</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Gedner</th>
                                                        <th scope="col">Date</th> 
                                                        <th scope="col">Attandance</th>
                                                        <th scope="col">Contact No</th>
                                                        <th scope="col">Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
                                                        <td><a href="#">123@indiraicem.ac.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td><img src="assets/img/brand/pic2.jpg"></td>
                                                        <td>DEMO3</td>
                                                        <td>Male</td>
                                                        <td><input type="date" id="attandence-date" name="attandence-date"></td>
                                                        <td>
                                                            <input class="success" type="radio" id="present" name="attandence">
                                                            <label for="Present">Prestent</label>
                                                            <input class="danger" type="radio" id="absent" name="attandence">
                                                            <label for="A/B">A/b</label>
                                                        </td>
                                                        <td>1234567890</td> 
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
                            
                        <div class="col-md-12 text-right mt-2">
                            <div class="last-send">
                            <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
    </div>
 
 <script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script> 


    <script src="assets/vendor/jquery/dist/jquery.min.js"></script> 
    <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>