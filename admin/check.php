<?php
// require_once ('vendor/autoload.php'); // if you use Composer
// require_once('ultramsg.class.php'); // if you download ultramsg.class.php
    
// $token="tof7lsdJasdloaa57e"; // Ultramsg.com token
// $instance_id="instance1150"; // Ultramsg.com instance id
// $client = new UltraMsg\WhatsAppApi($token,$instance_id);
    
// $to="0784366616"; 
// $body="hi cedro test"; 
// $api=$client->sendChatMessage($to,$body);
// print_r($api);
?>

<!-- https://api.ultramsg.com/{{instance_id}}/messages/chat -->




<?php
// $str1 = 'cedro';
// $options1 = [
// 'cost1' => 10,
// 'salt1' => '$P27r06o9!nasda57b2M22'
// ];
// $var=crypt($str1, $options1['salt1']);
// echo sprintf("The Result of crypt() function on %s is %s\n",$str1,$var );

// echo "<br>";
// echo sprintf("The Result of DEFAULT function on %s is %s\n",$str1, password_hash($str1, PASSWORD_DEFAULT));

// echo "<br>";
// echo sprintf("The Result of BCRYPT function on %s is %s\n", $str1,
// password_hash($str1, PASSWORD_BCRYPT, $options1));

// echo "<br>";


$pass="10";

$str1 = '10';
$hush=password_hash($str1, PASSWORD_DEFAULT);

$verify = password_verify($pass, $hush); 
if($verify)
{
   echo '<script>alert("yes")</script>';
}else{
    echo '<script>alert("no")</script>';
}

?>