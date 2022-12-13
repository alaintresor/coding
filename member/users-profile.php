
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Profile </title>
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
  <aside id="sidebar" class="sidebar">
    <?php
  include 'm_side_menu.php';
    ?>
  </aside><!-- End Sidebar-->

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
                    // header("refresh: 1");
                    $sql = "SELECT reg_number,m_fname,m_lname,m_email,dob,git,status,profile,about,phone  FROM member where reg_number='$reg'";
                    $result = $conn->query($sql);

                    
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile/<?php echo $row['profile']; ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $row['m_fname'].' '.$row['m_lname']; ?></h2>
              <h3>team <?php echo $row['status'] ?></h3>
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

               
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

             
                           <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"> <?php echo $row['about'] ?></p>

                  <h5 class="card-title">Profile Details</h5>
                  

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">reg Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['reg_number'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">First name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['m_fname'] ?></div>
                  </div>

                  <div class="row">
                  <div class="col-lg-3 col-md-4 label">Last name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['m_lname'] ?></div>
                  </div>

                  <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['m_email'] ?></div>
                  </div>

                  <div class="row">
                  <div class="col-lg-3 col-md-4 label">Date of birth</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['dob'] ?></div>
                  </div>

                  <div class="row">
                  <div class="col-lg-3 col-md-4 label">gitHub</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['git'] ?></div>
                  </div>
                  <div class="row">
                  <div class="col-lg-3 col-md-4 label">status</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['status'] ?></div>
                  </div>

                  <div class="row">
                  <div class="col-lg-3 col-md-4 label">phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['phone'] ?></div>
                  </div>

                  
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                    


                <form method="POST" action="users-profile.php" enctype="multipart/form-data">
            <div class="form-group">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary btn-md col-12 col-md-12 col-sm-12 col-lg-12 col-sx-12" type="submit" name="upload">UPLOAD</button>
            </div>
            <br>
        </form>

               

                  <!-- Profile Edit Form -->
                  <form action='users-profile.php' method='POST' novalidate>
                    

                    <div class="row mb-3">
                      <label for="first name" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fname" type="text" class="form-control" id="fullName" value="<?php echo $row['m_fname'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="LastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="lname" type="text" class="form-control" id="fullName" value="<?php echo $row['m_lname'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">
                        <?php echo $row['about'] ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $row['m_email'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">gitHub</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="git" type="text" class="form-control" id="company" value="<?php echo $row['git'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Date of birth</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="dob" type="date" class="form-control" id="Job" value="<?php echo $row['dob'] ?>">
                      </div>
                    </div>

                   
                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" minlength="10" maxlength="10" class="form-control" id="Linkedin" value="<?php echo $row['phone'] ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-md col-12 col-md-12 col-sm-12 col-lg-12 col-sx-12" name='go'>Save Changes</button>
                    </div>
                  </form>
                  <?php


include 'connection.php';
@$save=$_POST["upload"];
@$save2=$_POST["go"];





if(isset($save))
{



  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "./assets/img/profile/" . $filename;

  // $db = mysqli_connect("localhost", "root", "", "cedro");

  // Get all the submitted data from the form
    $sql = "UPDATE `member` SET `profile` = '$filename' WHERE `member`.`reg_number` = '$reg'";

  // Execute query
  mysqli_query($conn, $sql);

  // Now let's move the uploaded image into the folder: image
  if (move_uploaded_file($tempname, $folder)) {
    echo "<script> alert('Image uploaded successfully!')</script> ";
    echo "<script>window.location='./index.php'</script>";
  } else {
    echo "<script> alert(' Failed to upload image!')</script>";
  }
        }else if(isset($save2)){

       

   @$fname=$_POST["fname"];
@$lname=$_POST["lname"];
@$email=$_POST["email"];
@$git=$_POST["git"];
@$dob=$_POST["dob"];
@$about=$_POST["about"];

@$phone=$_POST["phone"];

       $sql = "UPDATE `member` SET `m_fname` = '$fname', `m_lname` = '$lname', `m_email` = '$email', 
            `dob` = '$dob', `git` = '$git',`about` = '$about',`phone` = '$phone' WHERE `member`.`reg_number` = '$reg'";
                $result = mysqli_query($conn, $sql);
                if ($result)
                    {
                        echo '<script>alert("well done")</script>'.$reg;
                        echo "<script>window.location='./index.php'</script>";
                        

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

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer"> -->
  <?php
   include 'footer.php';

   ?>
  <!-- </footer> -->
  <!-- End Footer -->

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
          @$changes=$_POST["change_password"]; 
          
          @$current=$_POST["password"];
          @$new=$_POST["new"];
          @$renew=$_POST["renew"];
        
          if(isset($changes))
          {

            $sql = "SELECT password FROM member WHERE reg_number='$reg' AND password='$current'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1)
                {

                  if($new===$renew)
                  {
                     $sql = "UPDATE `member` SET `password` = '$new' WHERE `member`.`reg_number` = '$reg'";
                     $result = mysqli_query($conn, $sql);
                     if($result)
                     {
                      echo '<script>alert("password well updated")</script>';
                      
                     }
                     else
                     {
                      echo '<script>alert("password not updated")</script>';
                     }


                  }else
                  {
                    echo '<script>alert("new password not muched with comfirm password")</script>';
                  }
            

                }
                else{
                  echo '<script>alert("your current password missMached")</script>';
                }

            // echo '<script>alert("Welcome to Geeks for Geeks")</script>';

            // $sql = "UPDATE `member` SET `m_fname` = '$fname', `m_lname` = '$lname', `m_email` = '$email', 
            // `dob` = '$dob', `git` = '$git' WHERE `member`.`reg_number` = '$reg'";
            //     $result = mysqli_query($conn, $sql);
            //     if ($result)
            //         {
            //             echo '<script>alert("well done")</script>'.$reg;
			echo "<script>window.location='./index.php'</script>";

            //         }else{
            //           echo '<script>alert("ooooh")</script>';
            //         }
                    

        }




                      
                    
                  ?>
                  
</body>

</html>