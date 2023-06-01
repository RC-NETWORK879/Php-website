<?php
$name = filter_input(INPUT_POST,'uname');
$marks = filter_input(INPUT_POST,'marks');

if(!empty($name && $marks)){
  $host ="localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "info";
  
  $conn = new mysqli($host,$dbuser,$dbpass,$db);
  if(mysqli_connect_error()){
    die('connection error ('.mysqli_connect_errno().')' 
    . mysqli_connect_error());
  }else{
    $sql = "INSERT INTO result(name,marks) values(`$name`,`$marks`)";
    if($conn->query($sql)){
    echo "New record inserted sucess fully";
    }else{
      echo "Not inserted <br>";
    }
    $conn->close();
  }
}







?>