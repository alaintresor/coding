<?php
             include 'connection.php';     
                   $p_id= $_GET['p_id'];
                   
                  @$go=$_POST["go"];
                  // @$link=$_POST["link"];
                   @$com=$_POST["com"];

                   @$go=$_POST["go"];
                  
                  
                  if(isset($go))
                  { 
                    // $x= $team_id;
                    //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
                  
                      $my_q ="UPDATE `project_feedback` SET `feedback` = '$com' WHERE `project_feedback`.`p_id` ='$p_id'";
                      $results= $conn->query($my_q);
                      if ($results) {
                        echo '<script>alert("Well done")</script>';
                        echo "<script>window.location='./index.php'</script>";
                  
                        
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                  
                      mysqli_close($conn);
                  }
                                      ?>