<?php 
require_once("head.php");
$con = new connect();
$query = "SELECT * FROM patient";
$patients = $con->getData($query);
?>

<div class="content">
        <h1></h1>
<div id="box">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="panel-title">Patient Details</div>
        </div>
        <div class="panel-body">
         <!--  <form method="post" action="printTicket.php">
             <input type="submit" name="create_pdf" class="btn btn-success" value="patiene"/>
          </form> -->
            <table class="table table-bordered">
                <thead>
                <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>DoB</th>
                     <th>Age</th>
                     <th>Gender</th>     
                </tr>
                </thead>
                <tbody>
                <?php
                 foreach($patients as $patient):
                ?>
                <tr>
                    <td><?php echo $patient['pat_name'] ?></td>
                    <td><?php echo $patient['pat_email'] ?></td>
                    <td><?php echo $patient['pat_phone_number'] ?></td>
                     <td><?php echo $patient['dob'] ?></td>
                    <td><?php echo $patient['age'] ?></td>
                    <td><?php echo $patient['gender'] ?></td>
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
   include('footer.php');
?>