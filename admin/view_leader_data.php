<?php
echo $leader_id=$_GET['leader_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>view leader</title>
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
  include 'side_menu.php';
    ?>
  </aside><!-- End Sidebar-->





  <main id="main" class="main">

   

    <section class="section">
      <div class="row">

      <div class="col-lg-3"></div>

      <?php
                    include 'connection.php';
	

                    $sql = "SELECT m_fname,m_lname,m_email,dob,git,about,profile,phone FROM member
                    where reg_number='$leader_id';";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>



                      <div class="col-lg-6">
                      <div class="pagetitle">
                      <h1>TEAM LEADER INFORMATION </h1>
                      <nav>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                          <li class="breadcrumb-item">Pages</li>
                          <!-- <li class="breadcrumb-item active">Blank</li> -->
                        </ol>
                      </nav>
                    </div><!-- End Page Title -->

                      <!-- Card with an image on top -->
                      <div class="card" style='padding:0.7cm'>
                        <img src="../team_leader/assets/img/profile/<?php echo $row['profile'] ?>" class="card-img-top" alt="...">
                       <br>
                        <div class="card-body">
                          <h5 class="">FIRST NAME: <?php  echo $row['m_fname'] ?><br>
                          <h5 class="">LAST NAME: <?php  echo $row['m_lname'] ?><br>
                          <h5 class="">EMAIL: <?php  echo $row['m_email'] ?><br>
                          <h5 class="">DOB: <?php  echo $row['dob'] ?><br>
                          <h5 class="">DOB: <?php  echo $row['git'] ?></h5>
                          <h5 class="">PHONE: <?php  echo $row['phone'] ?></h5>
                          


                        </div>
                        
                      </div><!-- End Card with an image on top -->

                      <!-- Card with an image on bottom -->


                      </div>
                     
                       <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
                 




        
                     
      

    
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