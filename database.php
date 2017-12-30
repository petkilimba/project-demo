<?php
   define("SERVER","localhost");
   define("SERVER_USERNAME","root");
   define("SERVER_PASSWORD","");
   define("DATABASE_NAME","cumputer_club");

   $db = mysqli_connect(SERVER,SERVER_USERNAME,SERVER_PASSWORD,DATABASE_NAME);


   if (mysqli_connect_errno()) {
    	echo "The connection failed due to ".mysqli_connect_err();
    	die();
    } 


