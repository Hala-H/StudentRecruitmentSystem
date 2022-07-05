<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"?>
	<title>Schools Import</title>
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
                    <h1 class="h3 mb-4 text-gray-800">Import Schools Data</h1>


                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Excel Sheet</h6>
                                </div>
                                <div class="card-body">
                                    <p>To import using excel sheet, make sure that file type is xls or xlsx.</p>
                                    <!-- Import Data using excel sheet -->
									<div class="outer-container">
										<form action="ImportUsingExcel.php" method="post"
											name="excelImportExcel" id="excelImportExcel" enctype="multipart/form-data">
											<div>
												<label>Choose Excel
													File</label> <input type="file" name="file"
													id="file" accept=".csv" class="btn btn-light btn-icon-split">
												<button type="submit" id="submit" name="importExcel"
													class="btn btn-primary btn-icon-split">Import</button>
											</div>
										</form>
    								</div>
    								<div id="response" class="">
									</div>
								</div>									
                            </div>
							
							<!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Form</h6>
                                </div>
                                <div class="card-body">
                                    <p>Fill the form below.</p>
                                    <!-- Import Data using excel sheet -->
									<div class="outer-container">
										<form action="ImportUsingForm.php" method="post"
											name="excelImportForm" id="excelImportForm" enctype="multipart/form-data">
											<div>
												<label>School Name: </label> 
												<input type="text" name="SName"
													id="SName" class="form-control bg-light border-0 small"><br>
												<label>School Type (Public, Private, International):</label>
												<input type="text" name="SType"
													id="SName" class="form-control bg-light border-0 small"><br>
												<label>Total Number of Senior Students:</label>
												<input type="text" name="SStudentsTotal"
													id="SStudentsTotal" class="form-control bg-light border-0 small"><br>
												<button type="submit" id="submit" name="importForm"
													class="btn btn-primary btn-icon-split">Import</button>
											</div>
										</form>
    								</div>
    								<div id="response" class="">
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