<?php
 $team_id=$_GET['team_id'];

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
  include 'header.php';
    ?>


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <?php
  include 'side_menu.php';
    ?>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <section class="section">
        <div class="row">
		
		 <?php
                    include 'connection.php';
                    
	
                    // $sql = "SELECT title,decription,duration,date,time,status FROM project where team_id='$team_id' ";
                   
                    $sql = "SELECT t_name,t_git,m_fname,m_lname,COUNT(reg_number) as number FROM team,member
                     where team.t_id=member.team_id and team.t_id='$team_id';";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>
		
		          <div class="col-lg-12">

                            <!-- Card with an image on top -->
                            <div class="card" style='padding:0.7cm'>
                            <h6 class="card-title"><b>LEADER IDENTIFICATIONS</b></h6>
                              <!-- <img src="assets/img/card.jpg" class="card-img-top" alt="..."> -->
                              <div class="card-body">
                                <h5 class="card-title">
                              <h5>Team name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['0'] ?></h5> </h5>

                                  
                                   <h5>Team github &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php  echo $row['1'] ?></h5> 

                                   <h5>Team Leader :&nbsp;&nbsp;&nbsp;<?php  echo $row['2'].' '.$row['3'] ?></h5>
                                   <h5>Team Members :<?php  echo $row['4']?></h5>
                               
                              </div>
							  </div>
							  </div>
							  
							    <?php
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
         
         
                <!-- Table with stripped rows -->

                 
               

               <?php
                    include 'connection.php';
                    

	
                    $sqlx = "SELECT title,decription,duration,status,start_date,end_date,p_id FROM project where team_id='$team_id'";
                    $resultx = $conn->query($sqlx);

                    if ($resultx->num_rows > 0) {
                      // output data of each row
                      while($rowx= mysqli_fetch_array($resultx)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>
                          
                     

                                                <div class="col-lg-6">

                           

                             


                              <div class="card">
              <div class="card-body">
                <!-- <h5 >List of Members</h5> -->
                <h6 class="card-title"><b style="margin-left:2cm;font-size:25px">PROJECT IDENTIFICATIONS</b></h6>
  
                <!-- Table with stripped rows -->

                 
              

                 
                         
                          <h5> <b> PROJECT TITLE </b><br>
                          &nbsp; &nbsp; &nbsp;<?php  echo $rowx['0'] ?><br><br>

                                                        
                      <b> DESCIPTION </b>  <br> <br><p style="margin-left:1cm"><?php  echo $rowx['1'] ?></p> <br>

                        duration:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $rowx['2'] ?><br>

                       starting Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $rowx['4'].' <br>
                         Ending Date  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$rowx['5'] ?>
                        <h5>status :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $rowx['3']?></h5><br>
						<a href="view_teams_project.php?p_id=<?php echo $rowx["6"]?> ">
             <button type="submit" class="btn btn-primary btn-md col-12 col-md-12 col-sm-12 col-lg-12 col-sx-12" name='go'>VIEW PROJECT</button></a>  
                    
                     
               
               
                <!-- End Table with stripped rows -->
  
              </div>
            </div>


                            </div><!-- End Card with an image on top -->
                            

                            <!-- Card with an image on bottom -->
  <?php
                      }
                    } else {
                      ?>
					  
					  <div class="col-lg-12">

                            <!-- Card with an image on top -->
                            <div class="card" style='padding:0.7cm'>
                            
                              <!-- <img src="assets/img/card.jpg" class="card-img-top" alt="..."> -->
                              <div class="card-body">
                                <h5 class="card-title">
                             <h6 class="card-title"><b>0 PROJECT</b></h6>
                               
                              </div>
							  </div>
							  </div>
							  
					  <?php
                    }
                  ?>
                 

                            </div>


        </div>
      </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

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










