<?php 
require_once("head1.php");
$con = new connect();
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users";
$users = $con->getData($query);
?>

<div class="content" style="margin-left: 150px;">
        <h1></h1>
  <div id="box">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                   <div class="panel-title"><center><h3>Staff Members</h3></center></div>
            </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                     <th>Profile Image</th>
                     <th>Name</th>
                     <th>Gender</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>Proffesion</th>
                     <th>Action</th> 
                </tr>
                </thead>
                <tbody>
                <?php
                 foreach($users as $user):
                ?>
                <tr>
                    <td><img style="width:100px; height: 80px;" src="../public/images/<?php echo $user['image'];?>" /></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['gender'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['phone_number'] ?></td>
                    <td><?php echo $user['proffesion'] ?></td>
                    <td><a href="viewUser.php?userId=<?php echo $user['id'] ?>" class="btn btn-primary">View</a>
                    <a href="editUser.php?userId=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?userId=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            
                <?php
                endforeach;
                ?>
                </tbody>
            </table>
         </div>
     </div>
   </div>
 </div>  
</div>

<?php
include('footer1.php');
?>