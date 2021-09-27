<?php
require_once("head1.php");
$con = new Connect();
$path="../public/images/";
if(isset($_POST['Submit'])) { 
    $target_file=$path.basename($_FILES["image"]["name"]);
    $name = $_POST['name'];
    $gender= $_POST['gender'];
    $national_id = $_POST['national_id'];
    $proffesion = $_POST['proffesion'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $phone_number = $_POST['phone_number'];
    $image = $_FILES["image"]["name"];
    $image_tmp = $_FILES["image"]["tmp_name"]; 
    $role=$_POST['role'];
    
   //Getting role id from the roles table based on role name selected.
    $role_query_id = "SELECT * FROM role where role_name='$role'";
    $roles_id = $con->getData($role_query_id);
    foreach ($roles_id as $role) {
           $role_id = $role['role_id'] ;
        }                        
       $user_exist = "SELECT * FROM users WHERE email='$email'";
       $res = $con->getData($user_exist) ;  
       if($res==true){
         echo "<font color='red'>User already exist";
       }
       else{
           move_uploaded_file($_FILES["image"]["tmp_name"],$target_file); 
          //insert data to database  
          $result = $con->execute("INSERT INTO `users` (`name`, `gender`, `national_id`, `proffesion`, `email`, `username`, `password`, `phone_number`, `image`, `role_id`) VALUES ('$name', '$gender', '$national_id', '$proffesion', '$email', '$username', '$password', '$phone_number', '$image', '$role_id')");
          
          //display success message
          if($result){
             echo "<font color='green'>User added successfully.";
            }

         else{
              echo "<font color='red'>There was an error in adding user record!!.";
            }
     }

  }
?>
<?php
    $role_query = "SELECT * FROM role";
    $roles = $con->getData($role_query);                                      
?>
<script type="text/javascript">
  function validate() {
         var emailID = document.adduser.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter valid email")
            document.adduser.email.focus() ;
            return false;
         }

         if( document.adduser.phone_number.value == "" || isNaN( document.adduser.phone_number.value ) || document.adduser.phone_number.value.length != 10 ) {
            
            alert( "Please provide a phone number number in the format 0704562786" );
            document.adduser.phone_number.focus() ;
            return false;
         }
         if( document.adduser.password.value == "" ||
            document.adduser.password.value.length < 6 ) {
            
            alert( "Please Enter password with atlest 6 characters" );
            document.adduser.password.focus() ;
            return false;
         }
         return( true );
      }
</script>
<div class="content">       
<div class="col-md-9 col-md-offset-1" style="margin-top: 10px!important;">
         <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="panel-title">Enroll Staff</div>
           </div>
        <div class="panel-body">
    <form name="adduser" class="form-horizontal" enctype="multipart/form-data" method="post" action="addUser.php" onsubmit="" ="return validate()">
        <div class="form-group">
            <label class="control-label col-md-3">Full Name</label>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Gender</label>
            <div class="col-md-9">
                <input type="text" name="gender" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">National ID</label>
            <div class="col-md-9">
                <input type="number" name="national_id" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">Proffession </label>
            <div class="col-md-9">
                <input type="text" name="proffesion" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">UserName</label>
            <div class="col-md-9">
                <input type="text" name="username" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Phone Number</label>
            <div class="col-md-9">
                <input type="number" name="phone_number" class="form-control" required>
            </div>
        </div>
      
        <div class="form-group">
            <label class="control-label col-md-3">Profile Picture</label>
            <div class="col-md-9">
                <input type="file" name="image" class="form-control" required>
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-md-3">Role</label>
            <div class="col-md-9">
                
                    <select name="role" class="form-control" required style="height: calc(3.26rem + 2.54px)!important;">
                        <?php foreach($roles as $role):?>
                       <option><?php echo $role['role_name'] ?></option>
                       <?php endforeach; ?>
                   </select>         
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="Submit" value="Register Employee" class="btn btn-primary"> 
            </div>
        </div>
    </form></div>
</div>
</div>
</div>
<?php
require_once("footer1.php");
?>