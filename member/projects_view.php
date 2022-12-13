<?php

include 'connection.php';

echo $p=$_GET['p_id'];

session_start();
  $reg=$_SESSION['reg_number'];
  $name=$_SESSION['name'] ;
  $email=$_SESSION['email_name'];
  $id=$_SESSION['team_id'];
  if(!isset($_SESSION['email_name']))
  {
    echo "<script>window.location='../users_login.php'</script>";
  }else


  $sql = "SELECT team_id FROM member WHERE  reg_number='$reg'";
  $result = mysqli_query($conn, $sql);
  
  
  while($row=mysqli_fetch_array($result))
  {
    $team_id=$row['team_id'];
    
  
  }
  
  if(!isset($_SESSION['email_name']))
  {
    echo "<script>window.location='../users_login.php'</script>";
  }else



  
$sql = "SELECT m_fname FROM member WHERE  reg_number='$reg'";
$result = mysqli_query($conn, $sql);


while($row=mysqli_fetch_array($result))
{
  $namex=$row['m_fname'];
  

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>project list</title>
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


<div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Code From zero</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->


        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

         

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
            <?php

              $sql = "SELECT * FROM member WHERE  m_fname='' AND reg_number='$reg'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) === 1)
                  {
                    echo $email; 
                  }else

                  {
                    echo $namex;
                  }
             ?>
            
        </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $email ?></h6>
              <span>team Leader</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->


</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <?php
include 'm_side_menu.php';
  ?>
</aside><!-- End Sidebar-->

  <main id="main" class="main">
    <section class="section">
        <div class="row">
         
         
                <!-- Table with stripped rows -->

                 
               

                  <?php
                    include 'connection.php';
	
                    $sql = "SELECT title,decription,duration,start_date,end_date,status FROM project where team_id='$id' and p_id='$p' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>
                          
                     

                                                <div class="col-lg-6">

                            <!-- Card with an image on top -->
                            <div class="card" style='padding:0.7cm'>
                              <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title"><?php  echo $row['0'] ?></h5>
                                <p class="card-text"><?php  echo $row['1'] ?></p>

                               

                                <span style='margin-left:0cm'> <?php  echo 'START DATE'.$row['start_date'].'  ___ END DATE'.$row['end_date'].'' ?></span><br/>
                              </div>
                              
                            </div><!-- End Card with an image on top -->

                            <!-- Card with an image on bottom -->


                            </div>






                           <div class="col-lg-6">
  <div class="card" style='padding:0.7cm'>
                             
                              <div class="card-body">

                             <center> <h3 class="card-title" style='margin-left:1cm'><b> PROJECT FEEDBACK</b></h3>
    
                              <?php
                    include 'connection.php';
	
                    $sql= "SELECT feedback FROM project_feedback where team_id='$id' and p_id='$p' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($rowi= mysqli_fetch_array($result)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>
                                <p class="card-text"><?php  echo $rowi['feedback'];
                                 //echo '<script>alert("Incorect cridentios")</script>';
                                
                                ?>
                                </p></center>
                        <?php
                      }
                    }else{
                      ?>

                      <!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->

                      <?php
                     
                    }
                      ?>
                              </div>
                              
                            </div><!-- End Card with an image on top -->

















    
                              
                              
                            </div><!-- End Card with an image on top -->

                            <!-- Card with an image on bottom -->


                            </div>
                       <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
                 
               
              
                <!-- End Table with stripped rows -->

        </div>
      </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include 'footer.php';

?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <?php
include 'connection.php';

@$go=$_POST["go"];
@$link=$_POST["link"];
@$com=$_POST["com"];


if(isset($go))
{
  //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

    $sqlxx = "INSERT INTO `project_feedback` (`f_id`, `team_id`, `host_link`, `comment`, `feedback`, `p_id`) 
    VALUES (NULL,'$team_id','$link', '$com', '','$p');";



    if (mysqli_query($conn, $sqlxx)) {
      echo '<script>alert("Well inserted")</script>';

      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


 

</body>

</html>