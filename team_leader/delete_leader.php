<?php
             include 'connection.php';     
                   $id= $_GET['leader_id'];

                   $my_q ="delete from member  WHERE `reg_number` ='$id'";
                      $results= $conn->query($my_q);
                      

                 
                  
                    
                      if ($results) {
                        


                        echo '<script>alert("Well deleted")</script>';
                        echo "<script>window.location='./add_member.php'</script>";
                  
                        
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                  
                      mysqli_close($conn);
                  
                                      ?>