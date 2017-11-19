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
	//check option_id in url
	if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min-range'=>1))){
		$id=$_GET['id'];
	}
	else {
		redirect_to('admin/view-option.php');
	}
	//check submit
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$data=array();
		$data['option_name']=trim(strip_tags($_POST['option_name']));
		$data['option_description']=trim(strip_tags($_POST['option_description']));
		$data['price_id']=strip_tags($_POST['price']);
		$data['tour_id']=strip_tags($_POST['tour']);
		$data['taxonomy_id']=trim($_POST['taxonomy']);
		
		
		
		//check update
		if($vsc->update('option_tour', $data,"option_id=$id")){
			redirect_to('admin/view-option.php');
		}
		else {
			$messages="<p class='text-warning'>The option was not updated in database !</p>";
		}
	}
	
	//select option with option_id
	$select_option="SELECT o.option_name,o.option_description,p.price_id,tour.tour_id,t.taxonomy_id";
	$select_option.=" FROM option_tour as o ";
	$select_option.=" INNER JOIN price as p ON o.price_id=p.price_id";
	$select_option.=" INNER JOIN tour ON o.tour_id=tour.tour_id";
	$select_option.=" INNER JOIN taxonomy as t ON o.taxonomy_id=t.taxonomy_id";
	$select_option.=" WHERE o.option_id=$id ";
	
	$option=$vsc->fetch_one($select_option);
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Edit Option</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="edit_option"  method="post" >
         		 			 
         		 			 		<!-- new title -->
                                  <div class="form-group">
                                      <label>Name</label>
                                      <input type='text' name='option_name' class="form-control" required value="<?php if(isset($option['option_name'])) echo htmlentities($option['option_name'],ENT_COMPAT,'UTF-8'); ?> ">
                                  </div>
                                  
                                  <!-- new description -->
                                  <div class="form-group">
                                      <label>Description</label>
                                      <textarea name='option_description' class="form-control" required><?php if(isset($option['option_description'])) echo htmlentities($option['option_description'],ENT_COMPAT,'UTF-8'); ?></textarea>
                                  </div>
                                  
                                 
                                  
                                  <!-- price -->
                                  <div class="form-group">
                                      <label>Price</label>
                                      <select name='price' class='form-control'>
                                     
                                      <?php 
                                      	//select price in database
                                      	$select_prices="SELECT price_id ,price_from FROM price";
                                      	
                                      	//return array
                                      	
                                      	$prices=$vsc->fetch_all($select_prices);
                                      
                                      	foreach ($prices as $val){
                                      		echo"
												
                                      				<option value={$val['price_id']}>".$val['price_id']."</option> 
											";
                                      	}
                                      
                                      ?>
                                      </select>
                                      
                                      <script type="text/javascript">
										for(var i=0;i<edit_option.price.length;i++){
											if(edit_option.price[i].value=="<?php echo $option['price_id'];?>")
												edit_option.price[i].selected=true;
										}
                                      </script>
                                  </div>
                                  
                                  <!-- tour -->
                                  <div class="form-group">
                                      <label>Tour</label>
                                      <select name='tour' class='form-control'>
                                      <?php 
                                      	//select tour in database
                                      	$select_tours="SELECT tour_id,tour_name FROM tour";
                                      	
                                      	//return array
                                      	
                                      	$tours=$vsc->fetch_all($select_tours);
                                      
                                      	foreach ($tours as $val){
                                      		echo"
												
                                      				<option value={$val['tour_id']}>".$val['tour_name']."</option> 
											";
                                      	}
                                      
                                      ?>
                                      </select>
                                      <script type="text/javascript">
										for(var i=0;i<edit_option.tour.length;i++){
											if(edit_option.tour[i].value=="<?php echo $option['tour_id'];?>")
												edit_option.tour[i].selected=true;
										}
                                      </script>
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
										for(var i=0;i<edit_option.taxonomy.length;i++){
											if(edit_option.taxonomy[i].value=="<?php echo $option['taxonomy_id'];?>")
												edit_option.taxonomy[i].selected=true;
										}
                                      </script>
                                    
                                  </div>
                                  <button type="submit"  class="btn btn-default">Edit Option</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>