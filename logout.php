
<html>
    <head>
        <title>Logbook details</title>
        <link rel="stylesheet"type="text/css"href="style.css">
<link rel="stylesheet"type="text/css"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    </head>
    <center>
 <body>
<h3>
    We will see you again here is your weekly input</h3>

<?php
   session_start();

   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'userreg');

   $sql= "SELECT * FROM `logbook`";
$result=mysqli_query($con,$sql) or die(mysqli_error());
echo "<table border=1 width=60% align=center>

<tr>

<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th> Thursday </th>
<th> Friday </th>
</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";

echo "</tr>"; 
} 
echo "</table>";


?>

<br>
<button><a href="login.php">Log out</a>
</center>
</body>
</html>