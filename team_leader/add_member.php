
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add leader</title>
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




<br><br>

 <!-- Basic Modal -->
              
 <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"> <h3 class=""><b>ADD TEAM MEMBER FORM</b></h3></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     




                    <form class="row g-3 needs-validation" action='add_member.php' method='POST' novalidate>

                <div class="col-12">
                      <label for="yourUsername" class="form-label">Registration number</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"> <b>R</b> </span>
                        <input type="number" name="reg" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter reg number.</div>
                      </div>
                    </div>

             

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-key"></i></span>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter  password!</div>
                      </div>
                    </div>

                  
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='go'>Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    
                  </form>





                    </div>
                    <div class="modal-footer">
                      
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->









  
  <main id="main" class="main">
  <button type="button" class="btn btn-primary  col-4 col-md-4 col-sm-4 col-lg-4 col-sx-4" data-bs-toggle="modal" data-bs-target="#basicModal">
                ADD MEMBER FORM
              </button>
              <br><br>
    <section class="section">
        <div class="row">
         
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">List of Members</h5>
  
                <!-- Table with stripped rows -->

                 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">EMAIL</th>
                      <!-- <th scope="col">PHONE</th> -->
                      <th scope="col" colspan="2" style="text-align:center">Modify</th>
                    </tr>
                  </thead> 
                  <tbody>

                  <?php
                    include 'connection.php';
                    $sql = "SELECT team_id FROM member WHERE m_email='$email'  AND status='leader'  AND reg_number='$reg'";
                    $result = mysqli_query($conn, $sql);


                    while($row=mysqli_fetch_array($result))
                    {
                      $team_id=$row['team_id'];
                      

                    }
	
                    $sql = "SELECT phone,m_email,reg_number FROM member where team_id='$team_id' AND reg_number !='$reg'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      $i=0;
                      while($row = mysqli_fetch_array($result)) {
                       $i++;
                       ?>
                          <tr>
                      <th scope="row"><?php echo $i;?></th>
                      <td><?php echo $row["m_email"];?></td>
                      <!-- <td><?php //echo $row["phone"];?></td> -->
                    

                      <td> <a href="delete_leader.php?leader_id=<?php echo $row["reg_number"]  ?>"><i class="bi bi-trash-fill" ></i> </a></td>
                      <td> <a href="view_leader_data.php?leader_id=<?php echo $row["reg_number"]  ?>"><i class="bi bi-eye"></i></a>  </td> 
                      <!-- <td>  <a href="update_leader.php?id=<?php //echo $row["1"]  ?>"><i class="bi bi-pencil-square"></i> </a> </td> -->

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

$sql = "SELECT team_id FROM member WHERE m_email='$email'  AND status='leader'  AND reg_number='$reg'";
$result = mysqli_query($conn, $sql);


while($row=mysqli_fetch_array($result))
{
  $team_id=$row['team_id'];
  

}


@$go=$_POST["go"];
@$reg=$_POST["reg"];
@$email=$_POST["email"];
@$phone=$_POST["phone"];
@$pass=$_POST["password"];

// $unencrypted_password = $pass; 

// $hash = password_hash($unencrypted_password, PASSWORD_DEFAULT); 







      if(isset($go))
    {
	if($reg!='' && $email!='' && $pass!='')
	{
	  
$sql = "SELECT * FROM member where  reg_number='$reg'";
  $result = $conn->query($sql);

  if ($result->num_rows ===0) 
          {
        //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

          $sql = "INSERT INTO `member`
          (`m_id`, `reg_number`, `m_fname`, `m_lname`, `m_email`, `password`, `dob`, `git`, `status`, `team_id`, `profile`, `about`,`phone`) 
          VALUES ('', '$reg', '', '', '$email', '$pass', '', '', 'member', '$team_id', 'person.jpg', '','$phone');";

          if (mysqli_query($conn, $sql)) {

            echo '<script>alert("Well Added")</script>';
            echo "<script>window.location='./add_member.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
      }else{
	  echo '<script>alert("that member already exist")</script>';
	  }
	  }else{
		 echo '<script>alert("you can not submit nothing")</script>';
	  }
	  
	  
	  
	  }
	  


?>

</body>

</html>