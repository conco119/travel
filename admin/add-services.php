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
		$data['service_name']=trim(strip_tags($_POST['service_name']));
		$data['taxonomy_id']=trim($_POST['taxonomy']);
		
		$insert=$vsc->insert('service_travel', $data);
		
		//check insert
		if($insert>0){
			$messages="<p class='text-success'>The service was inserted in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The servicel was not inserted in database !</p>";
		}
	}
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add Service</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="add_service"  method="post" >
         		 			 
         		 			 		<!-- service name -->
                                  <div class="form-group">
                                      <label>Title</label>
                                      <input type='text' name='service_name' class="form-control" required>
                                  </div>
                                  
                                 
                                  <!-- taxonomy -->
                                  <div class="form-group">
                                      <label>Taxonomy</label>
                                      <select name='taxonomy' class='form-control'>
                                      <?php 
                                      	//select taxonomy in database
                                      	$select_taxs="SELECT taxonomy_id,taxonomy_name FROM taxonomy";
                                      	
                                      	//return array
                                      	
                                      	$taxs=$vsc->fetch_all($select_taxs);
                                      
                                      	foreach ($taxs as $val){
                                      		echo"
												
                                      				<option value={$val['taxonomy_id']}>".$val['taxonomy_name']."</option> 
											";
                                      	}
                                      
                                      ?>
                                      </select>
                                  </div>
                                  <button type="submit"  class="btn btn-default">Add Service</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>