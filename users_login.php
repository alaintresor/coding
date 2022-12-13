<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">User Login </h5>
                    <!-- <p class="text-center small">Enter your username & password to login</p> -->
                  </div>

                  <form class="row g-3 needs-validation" action='users_login.php' method='POST' novalidate>

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
                      <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                    </div>

                  
                    <div class="col-md-12">
                      <label for="yourpannel" class="form-label">User</label>
                      <select id="inputState" class="form-select" name="user">
                        <option selected>Choose...</option>
                        <option  value='member'>member</option>
                        <option value='leader'>team leader</option>
                        <option value='admin'>admin</option>
                      </select>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name='login'>Login</button>
                    </div>
                   
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  <?php


  

include 'connection.php';

@$login=$_POST["login"];
@$user=$_POST["user"];
@$email=$_POST["email"];
@$pass=$_POST["password"];


if(isset($login))
{

        if($user=='admin')
        {
                $sql = "SELECT * FROM super_admin WHERE email='$email' AND password='$pass'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) === 1)
                    {
                        // $row = mysqli_fetch_assoc($result);

                      // if ($row['user_name'] === $uname && $row['password'] === $pass) {

                      echo "Logged in!";
                      $_SESSION['email_name'] = $email;
                      $_SESSION['id'] = $id;
                      // $_SESSION['name'] = $row['name'];
                      // $_SESSION['id'] = $row['id'];
                      // header("location:./admin/index.php");
                      echo "<script>window.location='./admin/index.php'</script>";
                      // exit();

                    }
                    else
                    {

                        // header("Location: index.php?error=Incorect User name or password");
                        // echo 'Incorect cridentios';
                        echo '<script>alert("Incorect cridentios")</script>';

                        // exit();

                    }

        }
      elseif($user==='leader')
        
        {
          $sql = "SELECT * FROM member WHERE m_email='$email' AND password='$pass' AND status='leader'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) === 1)
              {

                $sql1 = "SELECT team_id,m_fname,reg_number FROM member WHERE m_email='$email' AND password='$pass' AND status='leader'";
                $result1 = mysqli_query($conn, $sql1);
                while($row = mysqli_fetch_array($result1)) {
                  $id= $row['team_id'];
                  $name= $row['m_fname'];
                  $reg= $row['reg_number'];

                 

                  }

                // echo "Logged in!";
                $_SESSION['reg_number'] = $reg;
                $_SESSION['name'] = $name;
                $_SESSION['team_id'] = $id;
                $_SESSION['email_name'] = $email;
                echo "<script>window.location='./team_leader/index.php'</script>";
                

              }
              else
              {
                echo '<script>alert("Incorect cridentios")</script>';

              }

        }elseif($user==='member')
        {
          $sql = "SELECT * FROM member WHERE m_email='$email' AND password='$pass' AND status='member'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) === 1)
              {

                $sql1 = "SELECT team_id,m_fname,reg_number  FROM member WHERE m_email='$email' AND password='$pass' AND status='member'";
                $result1 = mysqli_query($conn, $sql1);
                while($row = mysqli_fetch_array($result1)) {
                  $id= $row['team_id'];
                  $name= $row['m_fname'];
                  $reg= $row['reg_number'];

                 

                  }

                // echo "Logged in!";
                $_SESSION['reg_number'] = $reg;
                $_SESSION['name'] = $name;
                $_SESSION['team_id'] = $id;
                $_SESSION['email_name'] = $email;
                
                echo "<script>window.location='./member/index.php'</script>";
                

              }
              else
              {
                echo '<script>alert("Incorect cridentios")</script>';

              }

        }else{
          echo '<script>alert("please choose user!")</script>';
        }

  }

     
  
 

?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>