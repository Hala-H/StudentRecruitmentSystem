<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
	include "header.php";
	include "session.php";;
	?>
	<title> Dashboard </title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "sidebar.php"?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php"?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Number of Schools -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Number of Schools</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
												<?php 
													require_once "db.php";
													$connection = mysqli_connect($host,$user,$pass,$database);
		  
													$error = mysqli_connect_error();
													if($error != null){
														$output="<p> Unable to connect to database</P>".$error;
														exit($output);
													}
													//query to get data from the table
													$query = "SELECT COUNT(SID) FROM schools;";
													$result = mysqli_query($connection, $query);
													while($row = mysqli_fetch_array($result)){
													echo "".$row['COUNT(SID)']."";
													}
												?>
											</div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Number of Students -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Number of Students</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
												<?php 
													require_once "db.php";
													$connection = mysqli_connect($host,$user,$pass,$database);
		  
													$error = mysqli_connect_error();
													if($error != null){
														$output="<p> Unable to connect to database</P>".$error;
														exit($output);
													}
													//query to get data from the table
													$query = "SELECT COUNT(StID) FROM students;";
													$result = mysqli_query($connection, $query);
													while($row = mysqli_fetch_array($result)){
													echo "".$row['COUNT(StID)']."";
													}
												?>
											
											</div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Number of Activities -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Number of Activities
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
														<?php 
													require_once "db.php";
													$connection = mysqli_connect($host,$user,$pass,$database);
		  
													$error = mysqli_connect_error();
													if($error != null){
														$output="<p> Unable to connect to database</P>".$error;
														exit($output);
													}
													//query to get data from the table
													$query = "SELECT COUNT(AID) FROM activities;";
													$result = mysqli_query($connection, $query);
													while($row = mysqli_fetch_array($result)){
													echo "".$row['COUNT(AID)']."";
													}
												?>
													</div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<!-- Total Number of Students in all schools -->
						<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Total Number of Seniors in all Schools
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
														<?php 
													require_once "db.php";
													$connection = mysqli_connect($host,$user,$pass,$database);
		  
													$error = mysqli_connect_error();
													if($error != null){
														$output="<p> Unable to connect to database</P>".$error;
														exit($output);
													}
													//query to get data from the table
													$query = "SELECT SUM(SStudentsTotal) FROM schools;";
													$result = mysqli_query($connection, $query);
													while($row = mysqli_fetch_array($result)){
													echo "".$row['SUM(SStudentsTotal)']."";
													}
												?>
													</div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->

                    <!-- Content Row -->
                    <div class="row">
							<!-- Bar Graph -->
							<div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Number of Senior Students in Each School</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
										<script type="text/javascript" src="js/jquery.min.js"></script>
										<script type="text/javascript" src="vendor/chart.js/Chart.min.js"></script>
										<script type="text/javascript" src="js/app.js"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Activities</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    	<script type="text/javascript" src="js/jquery.min.js"></script>
										<script type="text/javascript" src="vendor/chart.js/Chart.min.js"></script>
										<script type="text/javascript" src="js/app2.js"></script>
                                </div>
                            </div>
                        </div>
					</div>
					<!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4" style='float:"left";'>
                            <div class="card-header py-3">
								 <h6 class="m-0 font-weight-bold text-primary">Todo</h6>
							</div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
  											<script language="javascript" type=text/javascript src="js/todo.js"> </script>

										<div class="new-task-container box">
										  <label for="new-task"></label>
											
											
										  <input type="text" id="new-task" class="bg-light border-0 large" 
                                            aria-describedby="basic-addon2" placeholder="I have to ...">
												<button id="addTask" class="btn-circle btn-sm bg-warning" type="button"> √ 
												</button>
										  </div>
											<br>
										  <div class="todo-list box">
											<h4 class="small font-weight-bold"> Incompleted Tasks</h4>		<ul></ul>
										  </div><!--/todo-list-->
												
										  <div class="complete-list box">
											<h4 class="small font-weight-bold"> Completed Tasks</h4>
												<ul>												
											  </ul>
										  </div><!--/complete-list-->
                                        </div>
                                </div>
                            </div>
                        </div>                            
                </div>
			</div>
					</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

			<!-- Footer -->
            <?php include "footer.php"?>
           <!-- End of Footer --> 
			
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
	<script language="javascript" type=text/javascript src="js/todo.js"> </script>

</body>

</html>