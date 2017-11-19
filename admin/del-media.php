  <?php 
	 session_start();
	 require("../includes/VSCPDO.php");
	 require("../includes/class.php");
	 require("../includes/function.php");
	$id=$_GET["id"]; 
  	$vsc= new vsc_pdo("localhost,root,,travel");
   	$del="DELETE FROM `media_travel` WHERE media_id=$id";
 	$vsc->query($del);
 	header("location:view-media-travel.php"); 
 	exit();

 ?>