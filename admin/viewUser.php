<?php 
require_once("head1.php");
$con = new connect();
$userId = $_GET['userId'];
$query = "SELECT * FROM users WHERE id='$userId'";
$users = $con->getData($query);

?>

<div class="content" style="margin-left: 150px;">
        <h1></h1>
  <div class="container">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-success">
                 <div class="panel-body">
                    <div class="col-sm-6 col-md-4">
                        <!-- <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" /> -->
                        <img class="img-rounded img-responsive" src="../public/images/<?php foreach ($users as $user) { echo $user['image'];}?>" />
                     
                    </div>
                    <div class="col-sm-6 col-md-8">
                         
                       <?php 
                        foreach ($users as $user) {
                              echo "<h2>".$user['name']."</h2>";
                        }
                         ?>
                         <br>
                        <?php 
                        foreach ($users as $user) {
                           echo "PROFESSION : ".$user['proffesion'] ;
                          }

                         ?>
                       <table class="table table-bordered">
                           <br />
                            <?php 
                            foreach ($users as $user) {
                            echo "EMAIL : ". $user['email'];
                            }
                             ?>
                            <br />

                            <?php 
                             foreach ($users as $user) {
                            echo" GENDER : ".$user['gender']; }?>
                            <br />
                        
                            <?php 
                             foreach ($users as $user) {
                             echo "PHONE NUMBER : +254".$user['phone_number']; 
                            }
                            ?></table>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer1.php');
?>