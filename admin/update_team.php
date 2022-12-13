<?php
 $id=$_GET['id'];

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>change team name</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">

<?php
include 'header.php';
  ?>

</header><!-- End Header -->

  <aside id="sidebar" class="sidebar">
    <?php
  include 'side_menu.php';
    ?>
  </aside><!-- End Sidebar-->





  <main id="main" class="main">






  <?php
                    include 'connection.php';
	
                    $sql = "SELECT t_name FROM team where t_id='$id'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                          while($row = mysqli_fetch_array($result))
                          {
                            $name=$row['0'];
                          
                          }
                        }
                  ?>
                 
               
    <section class="section">
        <div class="row">
            <div class="col-lg-2"></div>
  
          <div class="col-lg-8">
  
            <div class="card">
                <div class="card-body">
                <br/> <center> <h3 class=""><b> change Name</b></h3></center/><br/>
    
                  <!-- Horizontal Form -->
                  <form action='update_team_name.php' method='POST' novalidate>
                  <div class="col-md-12">
                      <div class="form-floating">
                      <input type="text" class="form-control" id="floatingName" hidden name='id' value='<?php echo $id?>' placeholder="team name">
                      <input type="text" class="form-control" id="floatingName" name='name' value='<?php echo $name ?>' placeholder="team name">
                        <label for="floatingName">Team gitHub</label>
                      </div>
                    </div>
                   <br/><br/>
                  
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='go'> Save Change</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End Horizontal Form -->
    
                </div>
              </div>
  
           
  
            
  
          </div>

          <div class="col-lg-2"></div>
        </div>
      </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include 'footer.php';

?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>



</body>

</html>