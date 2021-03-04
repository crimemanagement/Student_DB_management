<?php 
	session_start();
    include("../Connection.php");
    if($_SESSION["Name"]== true)
     {               
        //echo $_SESSION["Name"];
      }
      else
      {
          echo "<script>window.location='logout.php';</script>";
          //echo "<script>window.location='../index.php';</script>";
       }
    ?>



<div class="admin-left">
    <div class="heading">
        <!-- <img src="../Images/logo.png"> -->
        <h2>Design X</h2>
        <!-- <h2><?php  echo $_SESSION["Name"]; ?></h2> -->
        <a href="#" onclick="openNav();" id="openNav"><i class="fas fa-angle-double-left"></i></a>
    </div>
    <div class="sidebar-nav" id="mySidebar">
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-tachometer-alt mr-2" style="color: #ff8f16"></i>Dashboard</a></li>
            <li><a href="profile.php"><i class="fas fa-user mr-2" style="color: #ff8f16"></i>Profile</a></li>
            <li><a href="faculty.php"><i class="fas fa-graduation-cap mr-2" style="color: #ff8f16"></i>Faculty</a></li>
            <li><a href="announcement.php"><i class="fas fa-bell mr-2" style="color: #ff8f16"></i>Announcements</a></li>
            <li><a href="Attendance.php"><i class="fas fa-address-card mr-2" style="color: #ff8f16"></i>Attendance</a></li>
            <li><a href="test.php"><i class="fas fa-address-book mr-2" style="color: #ff8f16"></i>Exam</a></li>
            <li><a href="logout.php"><i class="fas fa-power-off mr-2" style="color: #ff8f16"></i>Logout</a></li>
        </ul>
    </div>
</div>

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