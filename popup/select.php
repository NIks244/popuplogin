<?php  
require_once('connection.php');
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';    
      $query = "SELECT * FROM tbluser WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Firstname</label></td>  
                     <td width="70%">'.$row["Firstname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Lastname</label></td>  
                     <td width="70%">'.$row["Lastname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["Email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["Gender"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Password</label></td>  
                     <td width="70%">'.$row["Password"].' Year</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>