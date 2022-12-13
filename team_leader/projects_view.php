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


  $sql = "SELECT team_id FROM member WHERE m_email='$email'  AND status='leader'  AND reg_number='$reg'";
  $result = mysqli_query($conn, $sql);
  
  
  while($row=mysqli_fetch_array($result))
  {
    $team_id=$row['team_id'];
    
  
  }
  
  if(!isset($_SESSION['email_name']))
  {
    echo "<script>window.location='../users_login.php'</script>";
  }else



  
$sql = "SELECT m_fname FROM member WHERE m_email='$email'  AND status='leader'  AND reg_number='$reg'";
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

<?php

include 'headerx.php';
?>
</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <?php
include 'L_side_menu.php';
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
                              <img src="../assets/img/p.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title"><?php  echo $row['0'] ?></h5>
                                <p class="card-text"><?php  echo $row['1'] ?></p>

                               

                                
                              </div>
                              
                            </div><!-- End Card with an image on top -->

                            <!-- Card with an image on bottom -->


                            </div>






                            <div class="col-lg-6">

                            <!-- Card with an image on top -->
                            <div class="card" style='padding:0.7cm'>
                           
    
                 
                            <div class="card">
                <div class="card-body">
                <h3 class="card-title" style='margin-left:1cm'><b> UPLOAD PROJECT PROGRESS </b></h3>
    
                  <!-- Floating Labels Form -->
                  <form class="row g-3" action='' method='POST'>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" name='link' placeholder="hosted link">
                        <label for="floatingName">link</label>
                      </div>
                    </div>
                    
                    
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="comment" name='com' id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">comment</label>
                      </div>
                    </div>
                   
                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='go'>Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End floating Labels Form -->
    
                </div>
              </div>
    
  
           
  
            
  
          </div>









  <!-- Card with an image on top -->
            <br/>
            <div class="card" style='padding:0.7cm'>
                             
                   <div class="card-body">

                    <h3 class="card-title" style='margin-left:1cm'><b> PROJECT FEEDBACK</b></h3>
    
                     <?php
                    include 'connection.php';
	
                    $sql= "SELECT feedback FROM project_feedback where team_id='$id' and p_id='$p' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      $i=0;
                      while($rowi= mysqli_fetch_array($result)) {
                        $i++;
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>
                                <p class="card-text"><?php  echo "feedback:  ".$rowi['feedback'];
                                 //echo '<script>alert("Incorect cridentios")</script>';
                                
                                ?>
                                </p>
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
      echo "<script>window.location='./project_view.php'</script>";

      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


 

</body>

</html>