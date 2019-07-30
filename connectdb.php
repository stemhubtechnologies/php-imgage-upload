 <?php
/*   session_start();
   if(!isset($_SESSION['status'])) {
   header("Location: index.php");
   exit();
 }
*/
$hostname='localhost';
$user = 'root';
$password = '';
$dbname = 'meet';

$conn = new mysqli($hostname, $user, $password, $dbname);


if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Kolkata');

?>
