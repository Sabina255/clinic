<?php
require_once("head.php");
$con = new connect();
//getting id from url
$patId = $_GET['patId'];
$patients = $con->getData("SELECT * FROM patient WHERE pat_id='$patId'");
$diagnosis = $con->getData("SELECT * FROM diagnosis WHERE pat_id='$patId'");


foreach ($diagnosis as $dia) {
    
     $prescription=$dia['prescription']; 
     $diagnosed_of=$dia['diagnosed_of']; 
     
    }

     if(isset($_SESSION['doctor'])){
        $doctors = $_SESSION['doctor'];
        foreach ($doctors as $doctor) {
            $user_id=$doctor['id'];
        }
        
      }
     
    if(isset($_POST['update'])) 
    {   

    	$patId = $_POST['patId'];
	    $prescription = $_POST['prescription'];
	    $diagnosed_of = $_POST['diagnosed_of'];

	    //updating data in the patients table
	    $diagnosis = $con->execute("UPDATE diagnosis SET prescription='$prescription',diagnosed_of='$diagnosed_of',doctor_id=$user_id,status=1 WHERE pat_id='$patId'");
	     $patient=$con->execute("UPDATE patient SET status=1 WHERE pat_id='$patId'");

	       if($diagnosis==true and $patient==true){
	          header("Location:index.php"); 
          }
        else
            {echo "failed";}
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

                            <?php 
                            echo "<h3>Signs And Symptoms</h3>";
                             foreach ($diagnosis as $dia) {
                                
                             echo "<p>".$dia['description']."<p>" ;
                            }
                            ?>
                           <?php 
                            echo "<h3>Immunization</h3>";
                             foreach ($diagnosis as $dia) {
                             echo "<p>".$dia['immunization']."<p>" ;
                            }
                            ?></table>
                   
                    </div>
                </div>
            </div>
     
    <div class="col-md-7 col-md-offset-2">
        <center><h3>Enter Prescription for Patient</h3></center>
    <form class="form-horizontal" method="post" action="">
        <div class="form-group">
            <div class="col-md-9">
                <input type="hidden" name="patId" class="form-control" value="<?php echo $_GET['patId'];?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Diagnosed of</label>
            <div class="col-md-9">
                <input type="text" name="diagnosed_of" class="form-control" value="<?php echo $diagnosed_of;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Add prescription</label>
            <div class="col-md-9">
                <textarea name="prescription" class="form-control"  required><?php echo $prescription;?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">&nbsp;</label>
            <div class="col-md-9">
                <input type="submit" name="update" value="Submit" class="btn btn-primary"> 
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

