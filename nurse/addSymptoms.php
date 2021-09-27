<?php
require_once("head.php");
$con = new connect();
//getting id from url
$patId = $_GET['patId'];
$patients = $con->getData("SELECT * FROM patient WHERE pat_id='$patId'");

    if(isset($_POST['submit'])) 
    {   
      if(isset($_SESSION['nurse'])){
        $nurse = $_SESSION['nurse'];
        foreach ($nurse as $nur) {
          $user_id = $nur['id'];
        }
      }
    	$patId = $_POST['patId'];
	    $description = $_POST['description'];
      $immunization= $_POST['immunization'];
      $height= $_POST['height'];
      $weight= $_POST['weight'];

	    //updating data in the patients table
     $sql="INSERT INTO `diagnosis`(description,immunization,nurse_id,pat_id,height,weight)values('$description','$immunization','$user_id','$patId','$height','$weight')";
	    $diagnosis = $con->execute($sql);

	       if($diagnosis){
          ?><script type="text/javascript">
            alert("record succesifully added");<?php
             header("Location:index.php"); ?>

          </script><?php
          
        }
        else
            {$message= "<font color='red'>record failed";}
            ?><script type="text/javascript">
            alert($message);

          </script><?php
	   }
?>
<div class="content" style="margin-left: 150px;">
        <h1></h1>
  <div class="container">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-success">
                 <div class="panel-body">
                    <div class="col-sm-6 col-md-4">
                        <!-- <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" /> -->
                        <img class="img-rounded img-responsive" src="../public/images/<?php foreach ($patients as $patient) { echo $patient['image'];}?>" />
                     
                    </div>
                    <div class="col-sm-6 col-md-8">
                        
                       <?php 
                       
                        foreach ($patients as $patient) {
                              echo "<h2>".$patient['pat_name']."</h2>";
                        }
                         ?>
                         <br>
                       
                       <table class="table table-bordered">
                           <br />
                            <?php 
                            foreach ($patients as $patient) {
                            echo "EMAIL : ". $patient['pat_email'];
                            }
                             ?>
                            <br />

                            <?php 
                             foreach ($patients as $patient) {
                            echo" GENDER : ".$patient['gender']; }?>
                            <br />
                        
                            <?php 
                             foreach ($patients as $patient) {
                             echo "PHONE NUMBER : +254".$patient['pat_phone_number']; 
                            }?>

                          </table>
                   
                    </div>
                </div>
            </div>
     
    <div class="col-md-7 col-md-offset-2">
        <center><h3>Enter Signs And Symptoms of Patient</h3></center>
    <form class="form-horizontal" method="post" action="">
        <div class="form-group">
            <div class="col-md-9">
                <input type="hidden" name="patId" class="form-control" value="<?php echo $_GET['patId'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Height</label>
            <div class="col-md-9">
               <input type="number" name="height" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Weight</label>
            <div class="col-md-9">
                <input type="number" name="weight" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Signs & Symptoms</label>
            <div class="col-md-9">
                <textarea name="description" class="form-control" cols="10" rows="7" required></textarea>
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-md-3">Immunization</label>
            <div class="col-md-9">
                <textarea name="immunization" class="form-control" cols="10" rows="3" required></textarea>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
