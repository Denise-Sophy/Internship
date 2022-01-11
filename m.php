
<html>
    <head>
        <title>Log in details</title>
        <link rel="stylesheet"type="text/css"href="style.css">
<link rel="stylesheet"type="text/css"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    </head>
 <body>



<?php
   session_start();

   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'userreg');

   $sql= "SELECT * FROM `usertable`";
$result=mysqli_query($con,$sql) or die(mysqli_error());
echo "<table border=1 width=60% align=center>
<tr>
<th>Name</th>

<th>Password</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";

echo "</tr>"; 
} 
echo "</table>";


?>
 <center><button><a href="index.php">Go to logbook</a></center>
</body>
</html>