

<?php
      include 'connection.php';
       $sql1 = "SELECT m_fname,m_lname FROM member WHERE  reg_number='$reg' AND m_fname='' AND m_lname=''";
       $result1 = mysqli_query($conn, $sql1);
       if ($result1->num_rows ===1) {

        ?>
         <li class="" style="color:red;list-style:none">
        <a class="nav-link " href="index.php">
          
          <span style="color:red;text-align:center">plz fill your profile first !<br><br>
        in order to get your access!
        <a href="users-profile.php" style='margin-left:0.2cm;margin-top:1cm'>go to edit your profile names,...</a>
        
        </span>
        </a>
      </li><!-- End Dashboard Nav -->

        <?php

        // echo '<script>alert("you are unsigned team")</script>';


       }else{
        ?>


<ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php
      include 'connection.php';
       $sql1 = "SELECT team_id FROM member WHERE m_email='$email' AND team_id='$id' AND team_id='unsigned'";
       $result1 = mysqli_query($conn, $sql1);
       if ($result1->num_rows ===1) {

        ?>
         <li class="" style="color:red">
        <a class="nav-link " href="index.php">
          
          <span style="color:red;text-align:center">you are not yet asigned team this is why you can not have other menus<br><br>
        plz ! weit admin assign team !
        </span>
        </a>
      </li><!-- End Dashboard Nav -->

        <?php

        // echo '<script>alert("you are unsigned team")</script>';


       }else{
		   
		   include 'connection.php';
       $sql1 = "SELECT t_git FROM team WHERE  t_id='$id' AND t_git!=''";
       $result1 = mysqli_query($conn, $sql1);
       if ($result1->num_rows ==1) 
	   {

		   
		   
			?>

			<li class="nav-item">
					<a class="nav-link collapsed" data-bs-target="#members" data-bs-toggle="collapse" href="#">
					  <i class="bi bi-people"></i><span>Member</span><i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul id="members" class="nav-content collapse " data-bs-parent="#sidebar-nav">
					  <li>
						<a class="nav-link collapsed" href="add_member.php">
						  <i class="bi bi-circle"></i> 
						  <span>Add  Members</span>
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
						<a class="nav-link collapsed" href="projects_assigned.php">
						  <i class="bi bi-circle"></i>  
						  <span>View projects </span>
						</a>
					  </li>

					 
					 
					</ul>
				  </li><!-- End Forms Nav -->

				  <li class="nav-item">
			  <a class="nav-link collapsed" data-bs-target="#blogs" data-bs-toggle="collapse" href="#">
				<i class="bi bi-columns-gap"></i><span>Blogs</span><i class="bi bi-chevron-down ms-auto"></i>
			  </a>
			  <ul id="blogs" class="nav-content collapse " data-bs-parent="#sidebar-nav">
				

				<li>
				  <a class="nav-link collapsed" href="view_blogs.php">
					<i class="bi bi-circle"></i>  
					<span>View blogs </span>
				  </a>
				</li>

			   
			  </ul>
			</li><!-- End Forms Nav -->

			<li>
				  <a class="nav-link collapsed" href="update_git.php">
					<i class="bi bi-journal-text"></i>  
					<span>Update your team github </span>
				  </a>
				</li>

        <?php
	   }
	   else
		{
		   ?>
				   <li class="" style="color:red">
				<a class="nav-link " href="update_git.php">
				  
				  <span style="color:red;text-align:center">update your team gitHub first
				</span>
				</a>
			  </li><!-- End Dashboard Nav -->
		   
		   <?php
	    }
       }

      ?>

<?php
       }
	  
 
      ?>
    
    
     
    </ul>
      