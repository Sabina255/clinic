<?php
require_once("header.php");
// include"Database/Connect.php";
$con = new Connect();
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=md5($_POST['password']);
//admin login
$adm = "SELECT * FROM users WHERE email='$email' and password='$password' and role_id=1";
$admin = $con->getData($adm);

//nurse login
$nur = "SELECT * FROM users WHERE email='$email' and password='$password' and role_id=3";
$nurse = $con->getData($nur);

//Doctor login
$doc = "SELECT * FROM users WHERE email='$email' and password='$password' and role_id=2";
$doctor = $con->getData($doc);

//redirect admin to admin dashboard after login
if($admin){
   $_SESSION['admin']=$admin; 
   header("Location: admin/index.php"); 
}

//redirect admin to nurse dashboard after login
if($nurse){
   $_SESSION['nurse']=$nurse; 
   header("Location: nurse/index.php"); 
}
//redirect doctor to admin dashboard after login
if($doctor){
   $_SESSION['doctor']=$doctor; 
   header("Location: doctor/index.php"); 
}
else{
    echo "<font color='red'>Incorrect username or password.";
}
    
}
?>

<div class="col-md-6 col-md-offset-2" style="margin-top:40px;">
  <div class="panel panel-default">
    <div class="panel-heading">Login Form</div>
        <div class="panel-body " >
            <form class="form-horizontal" method="post" action="login.php">
                <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control" required>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" required>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                        <div class="col-md-9">
                            <input type="submit" name="login" value="Login" class="btn btn-primary"> 
                        </div>
                </div>
            </form>
        </div>
     </div>
   </div>

<?php
require_once("footer.php");
?>