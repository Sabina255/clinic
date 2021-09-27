<?php
require_once("head.php");
$con = new connect();
 	
$userId = $_GET['userId'];

$user=$con->delete($userId,"users");

if ($user) {
    header("Location:list_all_users.php");
}
?>
<?php
include('footer.php');
?>