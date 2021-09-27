<?php
require_once("head.php");
$con = new Connect();
$path="../public/images/";

 if(isset($_POST['Submit'])) { 
  $target_file=$path.basename($_FILES["image"]["name"]);   
    $pat_name = $_POST['pat_name'];
    $pat_email = $_POST['pat_email'];
    $pat_phone_number = $_POST['pat_phone_number'];
    $pat_type = $_POST['pat_type_id'];
    $DOB = $_POST['dob'];
    $age= $_POST['age'];
    $gender = $_POST['gender'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];           
          
        move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);    
        //insert data to database    
        $patient = $con->execute("INSERT INTO `patient` (pat_name,pat_email,pat_phone_number,pat_type_id,dob,age,gender,image) VALUES ('$pat_name', '$pat_email', '$pat_phone_number','$pat_type','$DOB', '$age', '$gender', '$image')");
        
        //display success message
        if($patient){
        echo "<font color='green'>Patient registered successfully.";
        header("Location:index.php"); 
       }
    }

?>
<?php
    $patient_query = "SELECT * FROM patient_type";
    $patient_types = $con->getData($patient_query);                                      
    ?>
    <div class="content">     
    <div class="col-md-9 col-md-offset-1" style="margin-top: 10px!important;">
         <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="panel-title">Book In Patient</div>
           </div>
        <div class="panel-body">
        <form name="addpatient" class="form-horizontal" enctype="multipart/form-data" method="post" action="addPatient.php">
                <div class="form-group">
                    <label class="control-label col-md-3">Full Name</label>
                    <div class="col-md-9">
                        <input type="text" name="pat_name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-9">
                    <input type="email" name="pat_email" class="form-control" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Contact Number</label>
                    <div class="col-md-9">
                        <input type="number" name="pat_phone_number" class="form-control" required>
                    </div>
                </div>
                
                  <div class="form-group">
                    <label class="control-label col-md-3">DOB</label>
                    <div class="col-md-9">
                        <input type="date" name="dob" class="form-control" required>
                    </div>
                </div>
                
                  <div class="form-group">
                    <label class="control-label col-md-3">Age</label>
                    <div class="col-md-9">
                        <input type="number" name="age" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Gender</label>
                    <div class="col-md-9">
                        <input type="text" name="gender" class="form-control" required>
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="control-label col-md-3">Patient Type</label>
                    <div class="col-md-9">
                        
                            <select name="pat_type_id" class="form-control" required style="height: calc(3.26rem + 2.54px)!important;">
                                <?php foreach($patient_types as $type):?>
                               <option value="<?php echo $type['pat_type_id']; ?>"><?php echo $type['pat_type']; ?></option>
                               <?php endforeach; ?>
                           </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Profile Picture</label>
                    <div class="col-md-9">
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>
              
                <div class="form-group">
                    <label class="control-label col-md-3">&nbsp;</label>
                    <div class="col-md-9">
                        <input type="submit" name="Submit" value="Register patient" class="btn btn-primary"> 
                    </div>
                </div>
            </form>
        </div>
     </div>  
    </div>
</div>     
<?php
include('footer.php');
?>


