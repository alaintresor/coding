<?php
echo $project_id=$_GET['project_id'];

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

    <div class="pagetitle">
      <h1>PROJECT IDENTIFICATIONS </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <!-- <li class="breadcrumb-item active">Blank</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


      <!-- Full texts
p_id	
	
decription	
duration	
team_id	
status	
start_date	
end_date	 -->

      <?php
                    include 'connection.php';
	

                    $sql = "SELECT title,decription,duration,status,start_date,end_date,p_id FROM project
                    where p_id='$project_id';";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>



                      <div class="col-lg-6">

                      <!-- Card with an image on top -->
                      <div class="card" style='padding:0.7cm'>
                        <img src="../assets/img/p.jpg" class="card-img-top" alt="...">
                       <br>
                        <div class="card-body">
                          <h5 class="">TITLE: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['title'] ?><br>
                          <h5 class="">DESCRIPTION &nbsp;&nbsp;&nbsp; <br><br>
                         <p  style="margin-left:1cm"> <?php  echo $row['decription'] ?></p><br>
                          <h5 class="">DURATION:&nbsp;&nbsp; <?php  echo $row['duration'] ?><br>
                          <h5 class="">STATUS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['status'] ?><br>
                          <h5 class="">START DATE: &nbsp;<?php  echo $row['start_date'] ?><br>
                          <h5 class="">END DATE: &nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['end_date'] ?></h5>

                        <br>  <button class="btn btn-danger btn-md col-12 col-md-12 col-sm-12 col-lg-12 col-sx-12"> <a href="delete_project.php?project_id=<?php echo $row["p_id"]  ?>" style="color:white"><i class="bi bi-trash-fill" ></i> DELETE</a></button>
                          


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