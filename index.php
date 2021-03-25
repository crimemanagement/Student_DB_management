<!DOCTYPE html>
<html>

<head>
    <title>Index</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/all.css"> 
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link rel="icon" href="Images/indira.png" type="image/gif" sizes="18x18">
</head>

<body>
 
     <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="logo" href="index.php">
                <img src="Images/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> 
    
    <div class="headingbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <h3>ENVISIONED FOR THE DIGITAL SCHOOL REVOLUTION!!</h3>
            <h2>Indira College Of Engineering & Management !! <span class="type"></span></h2>
            <p>The demo version gives you clear insights regarding different modules of the software that has incredible
                reach to the enormous task of the educational sector. In fact a real time access to software is an open
                opportunity to understand the creamy layer of features and get convinced with a closer access.</p>
        </div> 
            </div>
            
        </div>
    </div>

    <div class="login-section">
        <div class="container">
            <div class="row login_bar">
                <div class="col-md-4 ">
                    <div class="image_wrapper">
                        <img src="Images/Employee.png" alt="Employee">
                    </div>
                    <div class="desc_wrapper">
                        <h3>ADMIN</h3>
                        <a href="Admin/index.php" target="_blank">
                            <span class="button_label btn">Login as Admin</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image_wrapper">
                        <img src="Images/Student.png" alt="Student">
                    </div>
                    <div class="desc_wrapper">
                        <h3>STUDENT</h3>
                        <a href="Admin/index.php" target="_blank">
                            <span class="button_label btn">Login as Admin</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 image_wrapper">
                    <div class="image_wrapper">
                        <img src="Images/Guardian.png" alt="Guardian">
                    </div>
                    <div class="desc_wrapper">
                        <h3>GUARDIAN</h3>
                        <a href="Admin/index.php" target="_blank">
                            <span class="button_label btn">Login as Admin</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="section">

        <h1 style="font-family: 'Slabo 27px', serif;">WELCOME TO INDIRA GROUP OF INSTITUTE</h1>

        <div class="video-container">
            <div class="color-overlay"></div>

            <video autoplay loop muted>
                <source src="Images/videoplayback.mp4" type="video/mp4">
            </video>

        </div>
    </div> -->


    
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/typed.min.js"></script>
    <script src="js/fontawesome/js/fontawesome.min.js"></script>

    <script>
        var typed = new Typed('.type', {
            strings: ["VERIFIER 2.0"],
            loop: true,
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 20
        });
    </script>
</body>

</html>