<?php
session_start();
?>

<html>
    <head>
        <title>Log book</title>
        <link rel="stylesheet"type="text/css"href="style.css">
<link rel="stylesheet"type="text/css"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    </head>
 <body>
     
<div class="container">
<h1>Welcome </h1>

</button>
     
   </div>

<div class="container">
<div class="login-box">
<div class="row justify-content-center">
<div class="col-md-6 login-left">
    <h2>Log book</h2>
<h3> Days of the week</h3>
<form action="logbook.php"method="post">
<div class="form-group">
<label>Monday</label>
<input type="text"name="Monday"class="form-control"required>
</div>
<div class="form-group">
<label>Tuesday</label>
<input type="text"name="Tuesday"class="form-control"required>
</div>
<div class="form-group">
<label>Wednesday</label>
<input type="text"name="Wednesday"class="form-control"required>
</div>
<div class="form-group">
<label>Thursday</label>
<input type="text"name="Thursday"class="form-control"required>
</div>
<div class="form-group">
<label>Friday</label>
<input type="text"name="Friday"class="form-control"required>
</div>
<div class="form-group">
<button type="submit"class="btn btn-primary">Submit</button> 

</div>
</form>
</div>
</div>
</div>
</div>


 </body>
</html>



