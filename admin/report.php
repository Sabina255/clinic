<?php 
require_once("head1.php");
$con = new connect();
$query = "SELECT patient.*,users.*,diagnosis.*,patient_type.pat_type FROM patient_type JOIN patient ON patient_type.pat_type_id=patient.pat_type_id JOIN diagnosis ON diagnosis.pat_id=patient.pat_id JOIN users ON users.id=diagnosis.doctor_id";
$patients = $con->getData($query);
?>

<div class="content">
        <h1></h1>
<div id="box">
<div class="col-md-12 col-md-offset-0">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="panel-title">Patient Diagnosis Report</div>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                     <th>Patient Name</th>
                     <th>Patient Type</th>
                     <th>Date Of Birth</th>
                     <th>Age</th>
                     <th>Gender</th>
                     <th>Description</th>
                     <th>Immunization</th>
                     <th>Prescription</th>
                     <th>Diagnosed OF</th>
                     <th>Doctor Name</th>
                     <th>Date</th>

                </tr>
                </thead>
                <tbody>
                <?php
                 foreach($patients as $patient):
                ?>
                <tr>
                    <td><?php echo $patient['pat_name'] ?></td>
                    <td><?php echo $patient['pat_type'] ?></td>
                    <td><?php echo $patient['dob'] ?></td>
                    <td><?php echo $patient['age'] ?></td>
                    <td><?php echo $patient['gender'] ?></td>
                    <td><?php echo $patient['description'] ?></td>
                    <td><?php echo $patient['immunization'] ?></td>
                    <td><?php echo $patient['prescription'] ?></td>
                    <td><?php echo $patient['diagnosed_of'] ?></td>
                    <td><?php echo $patient['name'] ?></td>
                    <td><?php echo $patient['date'] ?></td>
                      
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