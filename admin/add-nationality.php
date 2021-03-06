 <?php
	require '../includes/class.php';
	require '../includes/VSCPDO.php';
	require '../includes/function.php';
	require 'templates/header-admin.php';
	require 'templates/sidebar-admin.php';
?>

<?php 
	//Khoi tao class vsc_pdo
	$vsc=new vsc_pdo("localhost,root,,travel");
	
	//check submit
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$data=array();
		$data['nationality_name']=trim(strip_tags($_POST['nationality_name']));
		
		$nationality_id=$vsc->insert('nationality', $data);
		
		//check insert
		if($nationality_id>0){
			$messages="<p class='text-success'>The nationality was inserted in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The nationality was not inserted in database !</p>";
		}
	}
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add Nationality</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="add_nationality"  method="post" >
                                  <div class="form-group">
                                      <label>Nationality</label>
                                       <input type='text' name='nationality_name' class="form-control" required>
                                  </div>
                                  
                                  <button type="submit"  class="btn btn-default">Add Nationality</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>