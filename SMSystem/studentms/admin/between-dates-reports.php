<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System|| Between Dates Reports</title>

    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
   
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <div class="container-scroller">
     <?php include_once('includes/header.php');?>

      <div class="container-fluid page-body-wrapper">

      <?php include_once('includes/sidebar.php');?>
     
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Between Dates Reports </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Between Dates Reports</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Between Dates Reports</h4>
                   
                    <form class="forms-sample" method="post" action="between-date-reprtsdetails.php">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">From Date:</label>
                        <input type="date" class="form-control" id="fromdate" name="fromdate" value="" required='true'>
                      </div>
                     <div class="form-group">
                        <label for="exampleInputName1">To Date:</label>
                        <input type="date" class="form-control" id="todate" name="todate" value="" required='true'>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
         <?php include_once('includes/footer.php');?>

        </div>
      </div>

    </div>
 
    <script src="vendors/js/vendor.bundle.base.js"></script>
   
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>

    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
  
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>

  </body>
</html><?php }  ?>