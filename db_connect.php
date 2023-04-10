<?php    
      $servername = "localhost";
      $username = "root";
      $password = ""; 
      $database = "rp";
      $conn = mysqli_connect($servername ,$username ,$password , $database);
      if($conn){

      }
      else{
        die("sorry...!!! Somthing went wrong.<br>" .mysqli_connect_error());
      }
      ?>