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
	
	//check service_id in url
	if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min-range'=>1))){
		$id=$_GET['id'];
		
	}
	else{
		redirect_to('admin/view-services.php');
	}
	
	//check submit
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$data=array();
		$data['service_name']=trim(strip_tags($_POST['service_name']));
		$data['taxonomy_id']=trim($_POST['taxonomy']);
		
		
		//check update
		if($vsc->update('service_travel', $data, "service_id=$id")){
			$messages="<p class='text-success'>The service was updated in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The servicel was not updated in database !</p>";
		}
	}
	
	//select service with service_id
	$select_ser="SELECT s.service_name,t.taxonomy_id";
	$select_ser.=" FROM service_travel as s ";
	$select_ser.=" INNER JOIN taxonomy as t ON s.taxonomy_id=t.taxonomy_id";
	$select_ser.=" WHERE service_id=$id";
	
	$ser=$vsc->fetch_one($select_ser);
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add Service</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="edit_service"  method="post" >
         		 			 
         		 			 		<!-- service name -->
                                  <div class="form-group">
                                      <label>Title</label>
                                      <input type='text' name='service_name' class="form-control" required value="<?php if(isset($ser['service_name'])) echo htmlentities($ser['service_name'],ENT_COMPAT,'UTF-8');?>">
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
                                      <script type="text/javascript">
										for(var i=0;i<edit_service.taxonomy.length;i++){
											if(edit_service.taxonomy[i].value=="<?php echo $ser['taxonomy_id'];?>")
												edit_service.taxonomy[i].selected=true;
										}

                                      </script>
                                  </div>
                                  <button type="submit"  class="btn btn-default">Edit Service</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>