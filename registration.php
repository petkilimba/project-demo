<?php
   
   include "database.php";

   if(isset($_POST['submit']) && !empty($_POST['submit']))
   {
   	 $username = $_POST['username'];
   	 $password = sha1($_POST['password']);
   	 $email = $_POST['email'];
   	 $course = $_POST['course'];

    //DATA INSERTION 
     $sql = "INSERT INTO user_info (username,email,password,course) VALUES ('$username','$email','$password','$course')";

     $db->query($sql);
     header('location : home.php');
   }
   else{
   	echo "something is wrong!";
   }

?>