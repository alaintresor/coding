
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>List of members</title>
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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  <?php
  include 'header.php';
    ?>

    
  </header><!-- End Header -->


  <aside id="sidebar" class="sidebar">
    <?php
  include 'm_side_menu.php';
    ?>
  </aside><!-- End Sidebar-->




  <main id="main" class="main">
    <section class="section">
        <div class="row">
         
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">List of Members </h5>
  
                <!-- Table with stripped rows -->

                 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                 
                      <th scope="col">EMAIL</th>
                      <!-- <th scope="col">PHONE</th> -->
                      <th scope="col">STATUS</th>
                      <th scope="col">VIEW</th>
                     
                    </tr>
                  </thead> 
                  <tbody>

                  <?php
                    include 'connection.php';
	
                    $sql = "SELECT phone,m_email,reg_number,status FROM member where team_id='$id'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       ?>
                          <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row["m_email"];?></td>
                      <!-- <td><?php //echo $row["phone"];?></td> -->
                      <td><?php echo $row["status"];?></td>
                      <td> <a href="view_team_mate.php?id=<?php echo $row["reg_number"]  ?>"><i class="bi bi-eye"></i></a>  </td> 
                      

                    </tr>
                       <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
                 
               
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
           
  
            
  
          </div>
        </div>
      </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer"> -->
  <?php
   include 'footer.php';

   ?>
  <!-- </footer>End Footer -->

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