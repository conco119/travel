<?php 
	require '../includes/VSCPDO.php';
	require '../includes/function.php';
	//check nationality_id on url
	if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min-range'=>1))){
		$nationality_id=$_GET['id'];
		//khoi tao vsc_pdo
		$vsc=new vsc_pdo("localhost,root,,travel");
		//delete nationality
		$del_nat="DELETE FROM nationality WHERE nationality_id=$nationality_id";
		
		if($vsc->count_rows($del_nat)==1){
			redirect_to('admin/view-nationality.php');
		}
	}
	else {
		redirect_to('admin/view-nationality.php');
	}
	
?>