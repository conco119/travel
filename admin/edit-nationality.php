<?php
require '../includes/class.php';
require '../includes/VSCPDO.php';
require '../includes/function.php';
require 'templates/header-admin.php';
require 'templates/sidebar-admin.php';
?>

<?php 

	//check nationality_id on url
	if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min-range'=>1))){
		$nationality_id=$_GET['id'];
	}
	else {
		redirect_to('admin/view-nationality.php');
	}
	//Khoi tao class vsc_pdo
	$vsc=new vsc_pdo("localhost,root,,travel");
	
	//check submit
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$data=array();
		$data['nationality_name']=trim(strip_tags($_POST['nationality_name']));
		
		
		
		//check update
		if($vsc->update('nationality', $data,"nationality_id=$nationality_id")){
			$messages="<p class='text-success'>The nationality was updated in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The nationality was not updated in database !</p>";
		}
	}
	
	//select nationality_name in database
	$select_nat="SELECT nationality_name FROM nationality WHERE nationality_id=$nationality_id";
	$nationality_name=$vsc->fetch_one($select_nat);
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Edit Nationality</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="add_nationality"  method="post" >
                                  <div class="form-group">
                                      <label>Nationality</label>
                                       <input type='text' name='nationality_name' class="form-control" value="<?php if(isset($nationality_name)) echo htmlentities($nationality_name['nationality_name'],ENT_COMPAT,'UTF-8'); ?>" required>
                                  </div>
                                  
                                  <button type="submit"  class="btn btn-default">Edit Nationality</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>