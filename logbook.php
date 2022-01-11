<?php
   session_start();

   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'userreg');
   $monday=$_POST['Monday'];
   $tuesday=$_POST['Tuesday'];
   $wednesday=$_POST['Wednesday'];
   $thursday=$_POST['Thursday'];
   $friday=$_POST['Friday'];
   $s="select*from logbook where Monday='$monday' &&Tuesday='$tuesday'&& Wednesday='$wednesday'&& Thursday='$thursday'&& Friday='$friday' ";
   $result=mysqli_query($con,$s);
   $num=mysqli_num_rows($result);
  if ($num==1){
      
      header('location:m.php');

   }else{
   $days="insert into logbook(Monday,Tuesday,Wednesday,Thursday,Friday)values('$monday','$tuesday',' $wednesday','$thursday','$friday') ";
   mysqli_query($con,$days);
   header('location:logout.php');
   
   }
  ?>