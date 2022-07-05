<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "header.php"?>
	<title>Students Database</title>
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                  <?php
					  require "db.php";
					  $connection = mysqli_connect($host, $user, $pass, $database);

					  $error = mysqli_connect_error();
					  if($error != null){
						$output = "<p> Unable to connect to database</P>".$error;
						exit($output);
					  }

					  $sql = "SELECT * FROM students";
					  $result = mysqli_query($connection, $sql);
					  $rowcount = mysqli_num_rows($result);
                   ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Students</h1>
                    <p></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Students Database</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                      <tr>
                                          <th> Student Name </th>
                                          <th> ID Number </th>
                                          <th> Nationality </th>
                                          <th> School Name </th>
                                          <th> Grade </th>
                                          <th> Mobile Number </th>
                                          <th> Email </th>
                                      </tr>
                                    </thead>
                                    <tfoot>
                                      <tr>
                                          <th> Student Name </th>
                                          <th> ID Number </th>
                                          <th> Nationality </th>
                                          <th> School Name </th>
                                          <th> Grade </th>
                                          <th> Mobile Number </th>
                                          <th> Email </th>
                                      </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
											while($row = mysqli_fetch_assoc($result))
											{
											  echo ("<tr>");
											  echo ("<td>".$row['StName']."</td>");
											  echo ("<td>".$row['StID']."</td>");
											  echo ("<td>".$row['StNationality']."</td>");
											  echo ("<td>".$row['SName']."</td>");
											  echo ("<td>".$row['StGrade']."</td>");
											  echo ("<td>".$row['StMobile']."</td>");
											  echo ("<td>".$row['StEmail']."</td>");
											  echo ("</tr>");
											}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
					</div>
					<?php
						mysqli_free_result($result);
						mysqli_close($connection);
					?>
                      <a href="studentsExport.php" class="btn btn-primary">Export Students Records</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
