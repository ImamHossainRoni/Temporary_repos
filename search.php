<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style></style>
</head>
<body>

<center>
  <form action="" method="post">
  <input type="text" name="search">
  <input type="submit" name="submit" value="SEARCH">
 </form>
  <br>
  <br>


<?php 
session_start();

$_SESSION['results'][] = array();


 $con=mysqli_connect("localhost","root","root","t_db");
 if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['submit'])) {

     $id = $_POST['search'];
       if(!empty($id)){
      
      $select="SELECT * FROM `t_tb` WHERE id='$id'";
      $sql2=mysqli_query($con,$select);

     // $data=mysqli_fetch_array($sql2);
      //$array[i] = $data;
       echo "<table>";
      while($value=mysqli_fetch_array($sql2)){
        $_SESSION['results'][] = $value;
        //echo "<tr><td>Id: ".$value['id']."</td> <td>Name: ".$value['name']."</td></tr>";
      }

    
   }
} 


echo"<table>
<tr>
<th>id</th>
<th>name</th>
<th>credit</th>
<th>semister</th>
<th>cgpa</th>
<th>program</th>
</tr>";

foreach ($_SESSION['results'] as $k=>$value) {
 //var_dump($value);
//echo "<tr><td>Id: ".$value['id']."</td> <td>Name: ".$value['name']."</td></tr>";


         echo "<tr>";
         echo"<td>".$value['id']."</td>";
         echo"<td>".$value['name']."</td>";
         echo"<td>".$value['credit']."</td>";
         echo"<td>".$value['semister']."</td>";
         echo"<td>".$value['cgpa']."</td>";
         echo"<td>".$value['program']."</td>";
         echo "</tr>";
 }
      echo"</table>";

    
  
   

 ?>


</center>
</body>
 </html>
