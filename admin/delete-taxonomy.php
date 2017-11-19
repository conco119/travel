<?php
  require("../includes/VSCPDO.php");
  if(isset($_POST["sub-delete"]))
  {
    if(!empty($_POST["taxonomy_id"]))
    {
      $exp = new vsc_pdo("localhost,root,,travel");
      $sql="delete from taxonomy where taxonomy_id={$_POST['taxonomy_id']}";
      $exp->query($sql);
      header("location: view-taxonomy.php ");
    }
  }
 ?>
