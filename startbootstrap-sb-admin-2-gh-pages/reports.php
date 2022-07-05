<!DOCTYPE html>
<html lang="en">

<head>
	
	<?php include "header.php"?>
	<title>Reports</title>
	<!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script type="text/javascript" src="Chart.js-2.9.4\dist\Chart.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"?>
        <!-- End of Sidebar -->

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
                    <h1 class="h3 mb-2 text-gray-800">Charts</h1>
                    <p class="mb-4"> </p>

                    <!-- Content Row -->
                    <div class="row">
<!--
						<script>
								$(document).ready(function () {
									showGraph();
								});


								function showGraph()
								{
									{
										$.post("data.php",
										function (data)
										{
											console.log(data);
											 var name = [];
											var marks = [];

											for (var i in data) {
												name.push(data[i].student_name);
												marks.push(data[i].marks);
											}

											var chartdata = {
												labels: name,
												datasets: [
													{
														label: 'Student Marks',
														backgroundColor: '#49e2ff',
														borderColor: '#46d5f1',
														hoverBackgroundColor: '#CCCCCC',
														hoverBorderColor: '#666666',
														data: marks
													}
												]
											};

											var graphTarget = $("#graphCanvas");

											var barGraph = new Chart(graphTarget, {
												type: 'bar',
												data: chartdata
											});
										});
									}
								}
							</script>
-->

                        <div class="col-xl-8 col-lg-7">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                    <hr>
                                    Styling for the area chart can be found in the
                                    <code>/js/demo/chart-area-demo.js</code> file.
                                </div>
                            </div>

                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                    <hr>
                                    Styling for the bar chart can be found in the
                                    <code>/js/demo/chart-bar-demo.js</code> file.
                                </div>
                            </div>

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <hr>
                                    Styling for the donut chart can be found in the
                                    <code>/js/demo/chart-pie-demo.js</code> file.
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

</body>

</html>