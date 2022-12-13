<?php
             include 'connection.php';     
                   $team_id= $_GET['team_id'];
                   
                 
                  
                 
                    // $x= $team_id;
                    //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                  
                      $my_q ="delete from team  WHERE `t_id` ='$team_id'";
                      $results= $conn->query($my_q);
                      if ($results) {
                        $my_q ="delete from member  WHERE `team_id` ='$team_id'";
                        $results= $conn->query($my_q);

                        $my_q1 ="delete from project_feedback WHERE `team_id` ='$team_id'";
                        $results= $conn->query($my_q1);


                        $my_q3 ="update  project set team_id='unsigned', 
                        status='unsigned',start_date='not yet',end_date='not yet' where team_id='$team_id'";
                        $results= $conn->query($my_q3);


                        echo '<script>alert("Well deleted")</script>';
                        echo "<script>window.location='./add_team.php'</script>";
                  
                        
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                  
                      mysqli_close($conn);
                  
                                      ?>