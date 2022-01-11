<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet"type="text/css"href="style2.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
 <div class="sidebar">
 <div class="sidebar-brand">
 <h2><span class="lab la-admin"></span> Welcome Admin</h2>
 </div>
 <div class="sidebar-menu">
 <ul>
<li>
<a href=""class="active"><span class="las la-igloo"></span>
<span>Dashboard</span></a>
</li>
<li>
<a href="m.php"><span class="las la-users"></span>
<span>Students</span></a>
</li>
<li>
<a href="dashboard.php"><span class="las la-user"></span>
<span>Activities</span></a>
</li>
<li>
<a href="logout.php"><span class="las la-clipboard-list"></span>
<span>Projects</span></a>
</li>



<li>
<a href="admin.php"><span class="las la-user"></span>
<span>Log Out</span></a>
</li>
 </ul>
</div>
 </div>
 <div class="main-content">
 <header>
 <h2>
<label for="">
<span class="las la-bars"></span>
</label>
Dashboard
</h2>

<div class="user-wrapper">
<div >
<h4>Mutayi </h4>
<small>Super admin</small>
</div>
</div>

 </header>
<main>

<center>
<div class="recent-grid">
    <div class="projects">
<div class="card">
<div class="card header">
<h3>Recent Activities on Logbook</h3>

<button>See All<span class="las la-arrow-right"></span></button>

<?php
   session_start();

   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'userreg');

   $sql= "SELECT * FROM `logbook`";
$result=mysqli_query($con,$sql) or die(mysqli_error());
echo "<table align=center>

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




<br>
<br>
<div class="students">
<div class="card">
<div class="card header">
<h3>Students</h3>

</div>
<div class="card-body">
    <div class="students">
      <div>
      <?php
 

   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'userreg');

   $sql= "SELECT * FROM `usertable`";
$result=mysqli_query($con,$sql) or die(mysqli_error());
echo "<table align=center>

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

</div>
<div class="card-body">
    
<table width="200%">
<thead>
<tr>


</tr>
<tr>
 
</form>
</div>
</tr>
</tbody>
</table>
</div>
</div>
</div> 
</div>
</div>



</tr>
<tr>

</tr>
</tbody>
</table>
</div>
</div>

</div>
</main>
</div>
</center>
</body>

</html>