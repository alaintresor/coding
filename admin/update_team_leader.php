<?php
include 'connection.php';



@$go=$_POST["go"];
 echo @$lname=$_POST["lname"];
 echo@$fname=$_POST["fname"];
 echo@$email=$_POST["email"];

 echo@$id=$_POST["id"];




      if(isset($go))
      {
        //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

          $sql = "UPDATE `member` SET `m_fname` = '$fname' , `m_fname` = '$lname' , `m_email` = '$email' WHERE `reg_number` = '$id'";

          if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Well updated")</script>';
			echo "<script>window.location='./index.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
      }


?>
