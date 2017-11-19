<?php 
session_start();
 require("../includes/VSCPDO.php");
 require("../includes/class.php");
 require("../includes/function.php");
$id=$_GET["id"]; 
  $vsc= new vsc_pdo("localhost,root,,travel");
  	$sel="SELECT media_link FROM media_travel WHERE media_id=$id";
 	$media_link=$vsc->fetch_one($sel);
    $del="delete from media_travel where media_id=$id";
     if($vsc->count_rows($del)==1)
     {
				if(file_exists($media_link['media_link'])){
					unlink($media_link['media_link']);
				}
				redirect_to('admin/view-media-travel.php'); 
	}
 ?>