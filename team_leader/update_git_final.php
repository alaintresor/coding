<?php
include 'connection.php';

@$go=$_POST["go"];
echo @$git=$_POST["git"];
echo @$t_id=$_POST["id"];




      if(isset($go))
      {
        //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

          $sql = "UPDATE `team` SET `t_git` = '$git' WHERE `team`.`t_id` = '$t_id'";

          if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Well updated")</script>';
			echo "<script>window.location='./index.php'</script>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
      }


?>
