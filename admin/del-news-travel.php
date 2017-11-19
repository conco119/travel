<?php
require '../includes/VSCPDO.php';
require '../includes/function.php';
//check nationality_id on url
if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min-range'=>1))){
	$new_id=$_GET['id'];
	//khoi tao vsc_pdo
	$vsc=new vsc_pdo("localhost,root,,travel");
	//delete nationality
	$del="DELETE FROM news_travel WHERE new_id=$new_id";

	if($vsc->count_rows($del)==1){
		redirect_to('admin/view-prices.php');
	}
}
else {
	redirect_to('admin/view-prices.php');
}

?>