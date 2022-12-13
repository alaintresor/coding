
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add team</title>
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
            <div class="col-lg-2"></div>
  
          <div class="col-lg-8">
  
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><b>Add team Form</b></h5>
    
                  <!-- Horizontal Form -->
                  <form action='add_team.php' method='POST' novalidate>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Team Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputText" name='name'>
                      </div>
                    </div>



                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-3 col-form-label" >Team leader </label>
                      <div class="col-sm-9">
                      <select id="inputState" class="form-select" name="id">
                      <option selected>Choose...</option>

                      <?php
                    include 'connection.php';
	
                    $sql = "SELECT reg_number,m_email FROM member where status='leader' AND team_id='unsigned'";
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










<!-- list of teams -->
<!-- _________________________________________________________________________________________________________________________ -->







  
  <main id="main" class="main">
    <section class="section">
        <div class="row">
         
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h3 class="card-title"><b>List of team leaders</b></h3>
  
                <!-- Table with stripped rows -->

                 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Team name</th>
                      <th scope="col">Team github</th>
                      <th scope="col">Leader</th>
                      <!-- <th scope="col">EMAIL</th> -->
                      <th scope="col" colspan="3" style="text-align:center">Modify</th>
                    </tr>
                  </thead> 
                  <tbody>

                  <?php
                    include 'connection.php';
	
                    $sql = "SELECT t_name,t_git,m_lname,m_fname,t_id FROM 
                    team,member where member.reg_number=team.t_leader;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                       $i=0;
                      while($row = mysqli_fetch_array($result)) {
                      $i++;
                       ?>
                          <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row["t_name"];?></td>
                      <td><?php echo $row["t_git"];?></td>
                      <td><?php echo $row["m_lname"]." ".$row["m_fname"];?></td>
                     
                      <td> <a href="delete_team.php?team_id=<?php echo $row["t_id"]  ?>"><i class="bi bi-trash-fill" ></i> </a></td>
                   <td> <a href="view_teams_data.php?team_id=<?php echo $row["t_id"]  ?>"><i class="bi bi-eye"></i></a>  </td> 
                      <td>  <a href="update_team.php?id=<?php echo $row["t_id"]  ?>"><i class="bi bi-pencil-square"></i> </a> </td>

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






  
<!-- end list of teams -->
<!-- _________________________________________________________________________________________________________________________ -->



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
 @$reg=$_POST["id"];
 @$name=$_POST["name"];
// @$pass=$_POST["password"];

if(isset($go))
{
  if($reg!='' || $name!='')
  {



 $sqlx = "SELECT t_name FROM team where  t_name='$name'";
 $resultx = $conn->query($sqlx);

  if ($resultx->num_rows ===0) 
          {


  $sql = "SELECT * FROM team where  t_leader='$reg'";
  $result = $conn->query($sql);

  if ($result->num_rows ===0) 
          {


                   $sql = "SELECT * FROM member where  reg_number='$reg' and status='leader'";
                    $result = $conn->query($sql);

                    if ($result->num_rows ===1) {

                       //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

                      $sql = "INSERT INTO `team` (`t_id`, `t_name`, `t_git`, `t_leader`) VALUES 
                      (NULL, '$name', '', '$reg');";
                  
                      if (mysqli_query($conn, $sql)) {
                        

                        $sql = "SELECT t_id FROM team where  t_leader='$reg'";
                    $result = $conn->query($sql);
                    while($row = mysqli_fetch_array($result)) {
                    $id= $row['t_id'];

                    $sql1="UPDATE `member` SET `team_id` = '$id' WHERE `member`.`reg_number` = '$reg'";
                    $resultx = $conn->query($sql1);

                    echo '<script>alert("Well done")</script>';
                        echo "<script>window.location='./add_team.php'</script>";

                    }




                        // echo $name;
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                  
                      mysqli_close($conn);

                  
                    } else {
                      echo '<script>alert("there is no team leader has that id")</script>';
                    }
              } else{
                echo '<script>alert("you can not have leader of more than one team")</script>';
              }


  
  // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
  // echo $name;
}else{
	 echo '<script>alert("That team already exist")</script>';
}
}else{
  echo '<script>alert("you cant submit empty data")</script>';
}
   
}
?>

</body>

</html>