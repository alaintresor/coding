<ul class="sidebar-nav" id="sidebar-nav">


<?php
      include 'connection.php';
       $sql1 = "SELECT m_fname,m_lname FROM member WHERE  reg_number='$reg' AND m_fname='' AND m_lname=''";
       $result1 = mysqli_query($conn, $sql1);
       if ($result1->num_rows ===1) {

        ?>
         <li class="" style="color:red">
        <a class="nav-link " href="index.php">
          
          <span style="color:red;text-align:center">plz fill your profile first !<br><br>
        in order to get your access!
        <a href="users-profile.php" style='margin-left:1cm'>go to add your name,...</a>
        
        </span>
        </a>
      </li><!-- End Dashboard Nav -->

        <?php

        // echo '<script>alert("you are unsigned team")</script>';


       }else{
        ?>

       







      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#members" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Member</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="members" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        

          <li>
            <a class="nav-link collapsed" href="list_of_members.php">
              <i class="bi bi-circle"></i> 
              <span>List of Members</span>
            </a>
          </li>
         
         
        </ul>
      </li><!-- End Forms Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#projects" data-bs-toggle="collapse" href="#">
          <i class="bi bi-credit-card-2-back"></i><span>Project</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="projects" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a class="nav-link collapsed" href="projects_assigned1.php">
              <i class="bi bi-circle"></i>  
              <span>link about projects.... </span>
            </a>
          </li>

          
         
        </ul>
      </li><!-- End Forms Nav -->

      <li>
        <a class="nav-link collapsed" href="view_blogs.php">
          <i class="bi bi-columns-gap"></i> <span>view  Blogs</span>
        </a>
      </li>
    </ul>
    <?php
    }
    ?>

  
   