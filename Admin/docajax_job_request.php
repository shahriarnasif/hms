<?php
session_start();
$con = oci_connect("system", "abedur11", "localhost/XE");
$query = "SELECT * FROM Doctor WHERE Doctor_Status='Pending'";
$stid = oci_parse($con, $query);
oci_execute($stid);
$count=oci_fetch_all($stid, $results);

$output = "";

$output .="

<table class='table table-bordered'>
    <tr>
    <th>ID</th>
    <th>USERNAME</th>
    <th>Email</th>
    <th>Qualification</th>
    <th>Certificate</th>
    <th>Action</th>


    </tr>


";
if($count<1)
{
    $output .="
    <tr>
    <td colspan='8'>NO JOB REQUEST YET.</td>
    </tr>
    
    
    
    ";
}




oci_execute($stid);
while($row = oci_fetch_row($stid))
{
   
   

    $output .= "<tr>
    <td>".$row[0]."</td>
    <td>".$row[1]."</td>
    <td>".$row[2]."</td>
    <td>".$row[13]."</td>
    <td>
    <a href='doctor-download.php?id=".$row[0]."'>
          <button  id=".$row[0]." class='btn btn-info'>Download</button>
      </a>
    </td>
    <td>
     <div class='col-md-2'>
         <div class='row'>
         <div class='col-md-8'>
         <button id='".$row[0]."' class='btn btn-success approve'>Approve</button>
         </div>
         <div class='col-md-6'>
         <button id='".$row[0]."' 
         class='btn btn-danger reject'>Reject</button>
         </div>
    </div>
    </div>

    </td>
      ";
}

$output .="
</tr>
</table>
";
echo $output;

?>