<?php
require('db.php');
if(isset($_GET['id'])){
    $id=mysqli_real_escape_string($db, $_GET['id']);
    $query = "DELETE FROM `services` WHERE id=$id";
    $run=mysqli_query($db,$query);
    if($run){
        echo "<script>window.location.href='../admin/index.php?servicessetting=true';</script>";                    
      
          }
}
?>