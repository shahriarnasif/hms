<?php

session_start();
?>
<!Doctype html>
<html>
<head>
<title>Prescribed</title>
</head>
<body>
<?Php
$con = oci_connect("system", "abedur11", "localhost/XE");

include("../include/header.php");
?>
<div class="container-fulid">
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-10">
            
                
                <?php


                 include("navber.php");
                ?>

             
                <div class ="col-md-10">
                <h5 class="text-center">Prescribed</h5>
                <?php
                                $id=$_SESSION['patient_Id'];
                                $query="select Medicine_Name,Pharmacist_Name,Patient_Name,prescription_date
                                from Prescription P inner join Patient Pa on P.Patient_Id = Pa.Patient_Id inner join Pharmacist Ph on  P.Pharmacist_Id =  Ph.Pharmacist_Id inner join
                                Medicine M on P.Medicine_Id = M.Medicine_Id where P.Patient_Id='$id'";

                                $stid = oci_parse($con, $query);
                                 oci_execute($stid);
                                 $count=oci_fetch_all($stid, $results);
                                 $output ="";

    $output .="
    <table class='table table-bordered'>
    <tr>
    <th>Medicine</th>
    <th>Pharmacist</th>
    <th>Patient</th>
    <th>Prescribed Date</th>
  

    </tr>


";
if($count<1)
{
    $output .="
    <tr>
    <td colspan='8'>NO Medicine.</td>
    </tr>
    
    
    
    ";
}




oci_execute($stid);
while($row = oci_fetch_row($stid))
{
   /*
    $mid=$row[0];
    $phid=$row[1];
    $pid=$row[2];
    $date=$row[3];
    $query1 = "SELECT *from Medicine where Medicine_Id='$mid'";
    $stid1 = oci_parse($con, $query1);
    oci_execute($stid1);
    $row1 = oci_fetch_row($stid1);
    $mname=$row1[1];
    $query1 = "SELECT *from Pharmacist where Pharmacist_Id='$phid'";
    $stid1 = oci_parse($con, $query1);
    oci_execute($stid1);
    $row1 = oci_fetch_row($stid1);
    $phname=$row1[11];
    $query1 = "SELECT *from Patient where Patient_Id='$pid'";
    $stid1 = oci_parse($con, $query1);
    oci_execute($stid1);
    $row1 = oci_fetch_row($stid1);
    $pname=$row1[1];
    */

    $output .= "<tr>
    <td>".$row[0]."</td>
    <td>".$row[1]."</td>
    <td>".$row[2]."</td>
    <td>".$row[3]."</td>
   
   ";
}

$output .="
</tr>
</table>
";
echo $output;
?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>