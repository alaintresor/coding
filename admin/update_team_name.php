<?php
include 'connection.php';

// $sql = "SELECT team_id FROM member WHERE m_email='$email'  AND status='leader'  AND reg_number='$reg'";
// $result = mysqli_query($conn, $sql);


// while($row=mysqli_fetch_array($result))
// {
//   $team_id=$row['team_id'];
  

// }


@$go=$_POST["go"];
 @$git=$_POST["name"];
 @$id=$_POST["id"];




      if(isset($go))
      {
        //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

          $sql = "UPDATE `team` SET `t_name` = '$git' WHERE `team`.`t_id` = '$id'";

          if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Well updated")</script>';
			echo "<script>window.location='./index.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
      }


?>
