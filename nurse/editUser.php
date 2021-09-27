<?php
require_once("head.php");
$con = new connect();
//getting id from url
$userId = $_GET['userId'];
$users = $con->getData("SELECT * FROM users WHERE id='$userId'");

foreach ($users as $user) {
    
     $name=$user['name']; 
     $email=$user['email']; 
     $phone_number=$user['phone_number']; 
     $username=$user['username']; 
     $password=$user['password']; 
    }

    if(isset($_POST['Update'])) 
    {   
    	$userId = $_POST['userId'];
	    $name2 = $_POST['name'];
	    $email2 = $_POST['email'];
	    $phone_number2 = $_POST['phone_number'];
	    $username2= $_POST['username'];
	    $password2 = $_POST['password'];

	    //updating data in the users table
	    $users = $con->execute("UPDATE users SET name='$name2',email='$email2',phone_number='$phone_number2',username='$username2',password='$password2' WHERE id='$userId'");
	        
	       if($users){
	        header("Location: list_all_users.php");
        }
        else
            {echo "failed";}
	}
?>

<div class="col-md-5 col-md-offset-2">
    <form class="form-horizontal" method="post" action="editUser.php">
        <div class="form-group">
            <div class="col-md-9">
                <input type="hidden" name="userId" class="form-control" value="<?php echo $_GET['userId'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Full Name</label>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" value="<?php echo $name;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Phone Number</label>
            <div class="col-md-9">
                <input type="text" name="phone_number" class="form-control" value="<?php echo $phone_number;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">UserName</label>
            <div class="col-md-9">
                <input type="text" name="username" class="form-control" value="<?php echo $username;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control" value="<?php echo $password;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="Update" value="Upadte" class="btn btn-primary"> 
            </div>
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>

