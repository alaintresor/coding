
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>add project</title>
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


  </header>

 <aside id="sidebar" class="sidebar">
    <?php
  include 'side_menu.php';
    ?>
 </aside> 
   






  <main id="main" class="main">
    
      <button type="button" class="btn btn-primary  col-4 col-md-4 col-sm-4 col-lg-4 col-sx-4" data-bs-toggle="modal" data-bs-target="#basicModal">
                ADD PROJECT FORM
              </button>






                 <!-- Basic Modal -->
              
                 <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"> <h3 class=""><b>Add Project form</b></h3></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     




                    <form class="row g-3" action='add_project.php' method='POST'>
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" name='title' placeholder="blog title">
                        <label for="floatingName">project title</label>
                      </div>
                    </div>
                    
                    
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Description" name='dis' id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">discription</label>
                      </div>
                    </div>
                   
                    <div class="col-md-12">
                      <label for="yourpannel" class="form-label">duration</label>
                      <select id="inputState" class="form-select" name="duration">
                        <!-- <option selected>Choose...</option> -->
                        <option  value='1 week'>1 week</option>
                        <option  value='2 weeks'>2 weeks</option>
                        <option  value='3 weeks'>3 week</option>
                        <option value='1 month'>1 mounth</option>
                        <!-- <option value='admin'>admin</option> -->
                      </select>
                    </div>
                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name='go'>Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End floating Labels Form -->






                    </div>
                    <div class="modal-footer">
                      
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->





              
              <br><br>
            <div class="card">
           
              
              <div class="card-body">
                <h5 class="card-title">PROJECT LIST</h5>
  
                <!-- Table with stripped rows -->

                 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">TITLE</th>
                      <!-- <th scope="col">DESCRIPTION</th>
                      <th scope="col">DURATION</th> -->
                      
                      <th scope="col">STATUS</th>

                      <th scope="col" >Modify</th>
                    </tr>
                  </thead> 
                  <tbody>

                  <?php
                    include 'connection.php';
                    
// Full texts
// p_id	

// decription	
// duration	
// date	
// time	
// team_id
                    $i=0;
                    $sql = "SELECT title,decription,duration,status,p_id FROM project";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                        $i++;
                       // echo "id: " . $row["id"]. " - Name: " . $row["reg_number"]. " " . $row["1"]. "<br>";
                       ?>
                          <tr>
                      <th scope="row"><?php echo $i ?></th>
                      <td><?php echo $row["0"];?></td>
               
                      <td><?php echo $row["3"];?></td>
                      <!-- <td><?php //echo $row["4"];?></td> -->
                      
                     
                      
                      <td> <a href="view_project_data.php?project_id=<?php echo $row["p_id"]  ?>"><i class="bi bi-eye"></i></a>  </td> 
                     


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
@$title=$_POST["title"];
@$dis=$_POST["dis"];
@$duration=$_POST["duration"];


if(isset($go))
{
if($title!="" OR $dis!="" OR $duration!="")
{
 
  $sql="INSERT INTO `project` (`p_id`, `title`, `decription`, `duration`, `team_id`, `status`, `start_date`, `end_date`) 
  VALUES (NULL, '$title', '$dis', '$duration', 'unsigned', 'unsigned', 'not_yet', 'not  yet')";

    // $sql = "INSERT INTO `project` (`p_id`, `title`, `decription`, `duration`, `time`,  `team_id`, `status`)
    //  VALUES (NULL, '$title', '$dis', '$duration', '', '', 'unsigned','unsigned');";

    if (mysqli_query($conn, $sql)) {
      
      echo '<script>alert("Well done")</script>';
      echo "<script>window.location='./add_project.php'</script>";
      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    
  }else{
    echo '<script>alert("fill all fields")</script>';
  }
}
?>

</body>

</html>