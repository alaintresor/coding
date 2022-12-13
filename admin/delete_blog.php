<?php
             include 'connection.php';     
                   $id= $_GET['b_id'];

                //    $sql = "SELECT team_id FROM member where reg_number='$id'";
                //    $result = $conn->query($sql);

                //    while($row = mysqli_fetch_array($result)) {
                //     $team=$row[0];
                //    }

                  
                      $my_q ="delete from blog  WHERE `b_id` ='$id'";
                      $results= $conn->query($my_q);
                      
                      if ($results) {
                       
                     


                        echo '<script>alert("Well deleted")</script>';
                        echo "<script>window.location='./index.php'</script>";
                  
                        
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                  
                      mysqli_close($conn);
                  
                                      ?>