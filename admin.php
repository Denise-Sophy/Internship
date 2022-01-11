<html>
<head>
<title> Login Admin</title>
<link rel="stylesheet"type="text/css"href="style.css">
<link rel="stylesheet"type="text/css"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h2> Admin </h2>
<form action="adminlog.php"method="post">
<div class="form-group">
<label>Name</label>
<input type="text"name="user"class="form-control"required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password"name="password"class="form-control"required>
</div>
<button type="submit"class="btn btn-primary">Login</button> 
</form>
</div>
</body>
</html>