
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>assign project to team</title>
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
            <div class="col-lg-2"></div>
  
          <div class="col-lg-8">
  
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Assign projects Form</h5>

                  <form action='assign_projects.php' method='POST' novalidate>
    
                  <!-- Horizontal Form -->
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label" >project</label>
                      <div class="col-sm-10">
                      <select id="inputState" class="form-select" name="p_id">
                      <!-- <option selected>Choose...</option> -->

                      <?php
                            include 'connection.php';
          
                            $sql = "SELECT p_id,title FROM project where team_id='unsigned'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_array($result)) {
                              // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                              ?>
                            
                              
                              <option  value='<?php echo $row["0"];?>'><?php echo $row["1"];?></option>
                              
                              <?php
                              }
                            } else {
                              echo "0 results";
                            }
                          ?>
                                
                        
                      </select>
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label" >Team</label>
                      <div class="col-sm-10">
                      <select id="inputState" class="form-select" name="team_id">
                      

                      <?php
                            include 'connection.php';
          
                            $sql = "SELECT DISTINCT t_id,t_name FROM team,project 
                            where team.t_id!=project.team_id and project.team_id='unsigned';";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_array($result)) {

                              ?>
                            
                              
                              <option  value='<?php echo $row["0"];?>'><?php echo $row["1"];?></option>
                              
                              <?php
                              }
                            } else {
                              echo "0 results";
                            }
                          ?>
                                
                        
                      </select>
                      </div>
                    </div>

                 
                  
                    
                    </fieldset>
             
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='go'>Submit</button>
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
 @$t=$_POST["team_id"];
 @$p=$_POST["p_id"];
// @$pass=$_POST["password"];

if(isset($go))
{
  $sqlz = "SELECT duration FROM project where`project`.`p_id` = '$p'";
                    $result = $conn->query($sqlz);

                   
                      
                      while($row = mysqli_fetch_array($result)) 
                      {
                        $duration=$row['duration'];
                      }
                      // $i++;
                       


                  $startDate=Date('d:m:Y');
                      if($duration=="1 week")
                      {
                        $endDate=Date('d:m:Y', strtotime('+7 days'));
                      }else if($duration=="2 weeks"){
                        $endDate=Date('d:m:Y', strtotime('+14 days'));
                      }else if($duration=="3 weeks"){
                        $endDate=Date('d:m:Y', strtotime('+21 days'));
                      }else {
                       $endDate=Date('d:m:Y', strtotime('+30 days'));
                      }
 
                      $sql1="UPDATE `project`  SET team_id='$t',`status` = 'signed', `start_date` = '$startDate', `end_date` = '$endDate' WHERE `project`.`p_id` = '$p'";     

                    $resultx = $conn->query($sql1);
                    if($resultx)
                    {
                  
                      echo '<script>alert("Well assigned")</script>';

   
                    }

                  }
   





?>

</body>

</html>