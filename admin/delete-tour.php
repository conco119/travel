<?php
  require("../includes/VSCPDO.php");
  if(isset($_POST["sub-delete"]))
  {
    if(!empty($_POST["tour_id"]))
    {
      $exp = new vsc_pdo("localhost,root,,travel");
      $sql="delete from tour where tour_id={$_POST['tour_id']}";
      $exp->query($sql);
      header("location: view-tour.php ");
    }
  }
 ?>
