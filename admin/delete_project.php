<?php
             include 'connection.php';     
                   $id= $_GET['project_id'];

                //    $sql = "SELECT team_id FROM member where reg_number='$id'";
                //    $result = $conn->query($sql);

                //    while($row = mysqli_fetch_array($result)) {
                //     $team=$row[0];
                //    }

                  
                      $my_q ="delete from project  WHERE `p_id` ='$id'";
                      $results= $conn->query($my_q);
                      
                      if ($results) {
                       
                        $my_q ="delete from project_feedback  WHERE `p_id` ='$id'";
                      $results= $conn->query($my_q);

                        // $my_q3 ="update  project_feedback set team_id='unsigned', 
                        // status='unsigned',start_date='not yet',end_date='not yet' where team_id='$team'";
                        // $results= $conn->query($my_q3);


                        echo '<script>alert("Well deleted")</script>';
                        echo "<script>window.location='./add_project.php'</script>";
                  
                        
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                  
                      mysqli_close($conn);
                  
                                      ?>