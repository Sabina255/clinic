<?php
require_once("head1.php");
$con = new connect();
 	
$userId = $_GET['userId'];

$user=$con->delete($userId,"users");

if ($user) {
    header("Location:list_all_users.php");
}
?>
<?php
include('footer1.php');
?>