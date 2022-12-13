<?php
echo  $id=$_GET['id'];

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDIT LEADER</title>
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
  include 'L_side_menu.php';
    ?>
  </aside><!-- End Sidebar-->





  <main id="main" class="main">






  <?php
                    include 'connection.php';
	
                    $sql = "SELECT m_fname,m_lname,m_email,dob,git,about,profile,reg_number FROM member
                    where  reg_number='$id';";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                          while($row = mysqli_fetch_array($result))
                          {
                            @$fname=$row['m_fname'];
                            @$lname=$row['m_lname'];
                            @$email=$row['m_email'];
                            @$reg=$row['reg_number'];
                          }
                        }
                  ?>
                 
               
    <section class="section">
        <div class="row">
            <div class="col-lg-2"></div>
  
          <div class="col-lg-8">
  
            <div class="card">
                <div class="card-body">
                <br/>  <h3 class=""><b> UPDATE LEADER</b></h3><br/>
    
                  <!-- Horizontal Form -->
                  <form action='update_team_leader.php' method='POST' novalidate>
                  <div class="col-md-12">
                      <div class="form-floating">
                      <input type="text" class="form-control" id="floatingName" hidden name='id' value='<?php echo $reg?>' placeholder="team name">
                      <input type="text" class="form-control" id="floatingName" name='fname' value='<?php echo @$fname ?>' placeholder="team name">
                  
                        <label for="floatingName">first name</label>
                      </div>
                        <br>
                      <div class="col-md-12">
                      <div class="form-floating">
                    
                      <input type="text" class="form-control" id="floatingName" name='lname' value='<?php echo @$lname ?>' placeholder="last name">
                        <label for="floatingName">last name</label>
                      </div>
                    </div>
                        <br>
                    <div class="col-md-12">
                      <div class="form-floating">
                    
                      <input type="text" class="form-control" id="floatingName" name='email' value='<?php echo $email ?>' placeholder="email">
                        <label for="floatingName">email</label>
                      </div>
                    </div>
                   <br/><br/>
                  
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='go'> Save Change</button>
                    
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