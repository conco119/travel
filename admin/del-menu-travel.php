 <?php 
session_start();
 require("../includes/VSCPDO.php");
 require("../includes/class.php");
 require("../includes/function.php");
	$id=$_GET["id"]; 
  	$vsc= new vsc_pdo("localhost,root,,travel");
    $del="delete from menu_travel where menu_id=$id";
     if($vsc->count_rows($del)==1)
     {	
		redirect_to('admin/view-menu-travel.php'); 
	}
 ?>