
<?php

$con=mysqli_connect("localhost","root","","userreg");
echo"connected successfully";
?>
<?php require ('admin.php');
if(isset($_POST['btn-login']))
{
    
    $Name=($_POST['Name']);
    $Password=($_POST['Password']);

    if(empty($Name)  ||empty($Password))
    {
        echo 'Please fill in the blanks';
    }
    else{
        $query="select * from admin where Name='$UName' or Password='$Password'";
        $result=mysqli_query($con,$query);
        //fetching data from table database
        if($row=mysqli_fetch_assoc($result))
        {
            //i encrypted the password so by doing this i am de encrypting it
            
            if($Password==$Password)
            {
                header('location:index.php');
            }
            else{
                echo "incorrect password";
            }
        }
        else
        {
            echo"please check your query";
            
        }
    }   
} 
if ($num==1){
      
    header('location:index.php');

 }else{
 $days="insert into logbook(Monday,Tuesday,Wednesday,Thursday,Friday)values('$monday','$tuesday',' $wednesday','$thursday','$friday') ";
 mysqli_query($con,$days);
 header('location:dashboard.php');
 }

?>