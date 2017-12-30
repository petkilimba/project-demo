<?php
  include "database.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>User | Registration</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="background-color: #1C6E8D; color: white;">

<!-- header Part	 -->
<div class="well container">
    <h3 class="text-center" style="color: black;">DIT Computer Club</h3>
</div>
<!-- END of Header -->

<!-- form -->
<div class="container">
	<form action="registration.php" method="post">

     <h3 class="text-center"><img src="bootstrap/images/logo.png" width="70px;" height="70px;" style="border-radius: 200px;"></h3>

		<h3 class="text-center">Fill The following Informations</h3>

		<div class="form-group form-horizontal col-md-offset-3">
           
           <div class="form-group col-md-8 ">
           	<label for="username">Enter Username</label>
           	<input type="text" name="username" placeholder="eg. Peter Daniel" class="form-control" required="required">
         </div>
          <div class="form-group col-md-8 ">
           	<label for="password">Enter Password</label>
           	<input type="password" name="password" placeholder="eg.1245!" class="form-control" required="required">
         </div>
          <div class="form-group col-md-8 ">
           	<label for="email">Enter Email</label>
           	<input type="email" name="email" placeholder="eg.peti@gmail.com" class="form-control" required="required">
         </div>
         <div class="form-group col-md-8 ">
           	<label for="course">Enter Course</label>
           	<input type="text" name="course" placeholder="eg. Computer" class="form-control" required="required">
         </div>
         <div class="form-group col-md-8 ">
           	<input type="submit" name="submit" class="btn btn-success btn0-block form-control" value="Register">
         </div>

		</div>
	</form>
</div>
<!-- form end -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>