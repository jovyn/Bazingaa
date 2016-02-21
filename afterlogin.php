<?php
ini_set('display_errors', 1);
 ini_set('log_errors', 1);
 ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
 error_reporting(E_ALL);

$username=$_POST['username'];
$password=$_POST['passname'];
$anstxt=$_POST['textname'];

//echo $username;
//echo $password;
//echo $anstxt;

$finalst = $username.$password.$anstxt;

if ($username.$password.$anstxt =="sheldonbazingaa1337"){
header('Location: homepage.php');
//echo "Correct";
//echo $finalst;
}
else{
//header("Location: member_Login.php?message=$anstxt");
header("Location: member_Login2.php?message=$anstxt");
echo "Wrong";
//echo $anstxt;
//echo "$finalst";
}
?>

