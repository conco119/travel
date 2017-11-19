<?php 
require '../includes/VSCPDO.php';
require '../includes/function.php';
//check nationality_id on url
if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min-range'=>1))){
	$id=$_GET['id'];
	//khoi tao vsc_pdo
	$vsc=new vsc_pdo("localhost,root,,travel");
	//delete nationality
	$del="DELETE FROM booking WHERE booking_id=$id";

	if($vsc->count_rows($del)==1){
		redirect_to('admin/view-booking.php');
	}
}
else {
	redirect_to('admin/view-option.php');
}

 ?>