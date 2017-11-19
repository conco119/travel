<?php
  require("../includes/VSCPDO.php");
  if(isset($_POST["sub-delete"]))
  {
    if(!empty($_POST["contact_id"]))
    {
      $exp = new vsc_pdo("localhost,root,,travel");
      $sql="delete from contact where contact_id={$_POST['contact_id']}";
      $exp->query($sql);
      header("location: view-contact.php ");
    }
  }
 ?>
