<?php
$db = mysqli_connect("localhost", "root", "", "newstimes");

if ($db){
  //  echo "Connection Establish";
}else{
  die("database Connection Errore".mysqli_error($db));
}

?>