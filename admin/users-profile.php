
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>admin Profile </title>
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
  <!-- ======= Sidebar ======= -->
  <!-- <aside id="sidebar" class="sidebar"> -->
    <!-- <?php
  //include 'side_menu.php';
    ?> -->
  <!-- </aside>End Sidebar -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

        <?php
                    include 'connection.php';
	
                    $sql = "SELECT id,email,password FROM super_admin where email='$email'";
                    $result = $conn->query($sql);

                    
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../member/assets/img/profile/person.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $email; ?></h2>
              <h3>Super Admin</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

               
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

             
                 <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">system ID</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['id'] ?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['email'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8">super Admin</div>
                  </div>

                  

                  
                  
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                    

               

                  <!-- Profile Edit Form -->
                  <form action='users-profile.php' method='POST' novalidate>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="../member/assets/img/profile/person.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                  
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $row['email'] ?>">
                      </div>
                    </div>

                   

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='go'>Save Changes</button>
                    </div>
                  </form>
                  <?php


                include 'connection.php';
                @$save=$_POST["go"];
                if(isset($save))
                {

                
                @$email=$_POST["email"];
              

          

                  $sql = "UPDATE `super_admin` SET  `email` = '$email'";
                      $result = mysqli_query($conn, $sql);
                      if ($result)
                          {
                            echo '<script>alert("well done")</script>'.$reg;

                    }else{
                      echo '<script>alert("ooooh")</script>';
                    }
                   }
                  }
  

                  ?>
                  
                  <!-- End Profile Edit Form -->

                </div>

               

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action='users-profile.php' method='POST' novalidate>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="new" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renew" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='change_password'>Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
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
          @$changes=$_POST["change_password"]; 
          
          @$current=$_POST["password"];

          @$new=$_POST["new"];
          @$renew=$_POST["renew"];


          // $current1 = $current; 
          $hashcurrent = password_hash($current, PASSWORD_DEFAULT); 
          
          // $newx = $new; 
          $hashnew = password_hash($new, PASSWORD_DEFAULT); 
          
        
        
        
          if(isset($changes))
          {



           

                  if($new===$renew)
                  {

               
                      $sql = "SELECT password FROM super_admin ";
                      $resultx = mysqli_query($conn, $sql);

                      while($row = mysqli_fetch_array($resultx)) {
                        $in= $row['password'];

                      }
                      echo $hashnew;
                        echo "<br>";
                      echo $in;


                    $verify = password_verify($hashcurrent, $in); 
                    if($verify)
                    {
                      //   $sql = "UPDATE `super_admin` SET `password` = '$hashnew' WHERE `email` = '$email'";
                      // $result = mysqli_query($conn, $sql);
                      // if($result)
                      // {
                      //   echo '<script>alert("password well updated")</script>';
                      // }
                      // else
                      // {
                      //   echo '<script>alert("password not updated")</script>';
                      // }

                      echo '<script>alert("yes")</script>';

                     }


                     


                  
                  else{
                    echo '<script>alert("your current password missMached")</script>';
                  }

                    

        }
      }




                      
                    
                  ?>
                  
</body>

</html>