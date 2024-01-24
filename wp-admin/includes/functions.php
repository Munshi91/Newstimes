<?php
   include "config.php";
  //  Delete Function  here

  function delete($table, $table_id, $delete_id, $page_url){

  global $db; 
   $sql = "DELETE FROM $table WHERE $table_id = '$delete_id'";
   $result = mysqli_query($db, $sql);
   if($result){
   header('Location: '. $page_url);
   }else{
   die("Delete Category Errore".mysqli_error($db));
   }
  }
   
   ?>