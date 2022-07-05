<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
	include "header.php";
	include "session.php";
	?>
  <title>Students Import</title>
</head>

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
                    <h1 class="h3 mb-4 text-gray-800">Import Student Data</h1>

                    <!-- Circle Buttons -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Excel Sheet</h6>
                        </div>
                        <div class="card-body">
                          <p>To import using excel sheet, make sure that file type is xls or xlsx.</p>
                          <!-- Import Data using excel sheet -->
                          <div class="outer-container">
                            <form action="ImportUsingExcelStudents.php" method="post"
                              name="excelImportExcel" id="excelImportExcel" enctype="multipart/form-data">
                              <div>
                                <label>Choose Excel File</label>
                                <input type="file" name="excel" id="file" accept=".xls, .xlsx" class="btn btn-light btn-icon-split">
                                <button type="submit" id="submit" name="importExcel" class="btn btn-primary btn-icon-split">Import</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                    <!-- form start -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Students Form</h6>
                      </div>
                    <form role="form" action="addStudent.php" method = "post">

                      <div class="card-body">
                        <p>Fill the form below.</p>
                        <div class="form-group row">
                            <label for="studentName" class="col-sm-2 text-right control-label col-form-label">Student Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control bg-light border-0 small" name="studentName" id="studentName"placeholder="Enter Name Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="studentID" class="col-sm-2 text-right control-label col-form-label">ID Number</label>
                            <div class="col-sm-3">
                                <input type="text" minlength="10" maxlength="10" class="form-control bg-light border-0 small" name="studentID" id="studentID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="studentNationality" class="col-sm-2 text-right control-label col-form-label">Nationality</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control bg-light border-0 small" name="studentNationality" id="studentNationality">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="studentSchool" class="col-sm-2 text-right control-label col-form-label">School Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light border-0 small" name="studentSchool" id="studentSchool">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="studentGrade" class="col-sm-2 text-right control-label col-form-label">Grade</label>
                            <div class="col-sm-2">
                                <input type="number" min="11" max="12" class="form-control bg-light border-0 small" name="studentGrade" id="studentGrade">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="studentMobile" class="col-sm-2 text-right control-label col-form-label">Mobile Number</label>
                            <div class="col-sm-3">
                                <input type="text" minlength="10" maxlength="12" class="form-control bg-light border-0 small" name="studentMobile" id="studentMobile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="studentEmail" class="col-sm-2 text-right control-label col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control bg-light border-0 small" name="studentEmail" id="studentEmail">
                            </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </form>
                  </div>
                  </div>
              </div>
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
