<?php include('header.php'); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info">
                    <h3 class="counter">2000</h3>
                    <h4 class="box-title">Total Students</h4>
                    <div class="side-ico">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
                <div class="more-info">
                    <a href="#">More Info<i class="fas fa-arrow-circle-right ml-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info danger">
                    <h3 class="counter">40</h3>
                    <h4 class="box-title">Total Staff</h4>
                    <div class="side-ico">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="more-info danger">
                    <a href="#">More Info<i class="fas fa-arrow-circle-right ml-1"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-none">
                <div class="white-box analytics-info yellow">
                    <h3 class="counter">6</h3>
                    <h4 class="box-title">Total Courses</h4>
                    <div class="side-ico">
                        <i class="fas fa-book-open"></i>
                    </div>
                </div>
                <div class="more-info yellow">
                    <a href="#">More Info<i class="fas fa-arrow-circle-right ml-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="white-box analytics-info success">
                    <h3 class="counter">10</h3>
                    <h4 class="box-title">Total Subjects</h4>
                    <div class="side-ico">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                </div>
                <div class="more-info success">
                    <a href="#">More Info<i class="fas fa-arrow-circle-right ml-1"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="stud-staff">
                    <div class="stud-staff-title">
                        <h3>Student and staff Chart</h3>
                    </div>
                    <div class="min-close-ico">
                        <i class="fas fa-minus mr-1" id="maximize"></i>
                        <i class="fas fa-times" id="close"></i>
                    </div>
                </div>
                <div class="stu-staff-chart" id="demo-close">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
</div>


<script src="../js/jquery-3.5.1.js"></script>
<script src="assets/js/Chart.js"></script>
<script src="assets/js/Chart.min.js"></script>



<!-- <script src="assets/js/argon.js?v=1.2.0"></script> -->


<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Students', 'Staff'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

<script>
// $(document).ready(function(){
//   $("#close").click(function(){
//     $("#demo-close").remove();
//   });
// });

// $("#maximize").click(function(){
//   $("demo-close").addClass("intro");
// });
// 
</script>

<script>
$(document).ready(function() {
    $("#close").click(function() {
        $("#demo-close").toggle();
    });
});
</script>

<style>
.intro {
    display: block;
}
</style>


</body>

</html>