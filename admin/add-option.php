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
		$data['option_name']=trim(strip_tags($_POST['option_name']));
		$data['option_description']=trim(strip_tags($_POST['option_description']));
		$data['price_id']=strip_tags($_POST['price']);
		$data['tour_id']=strip_tags($_POST['tour']);
		$data['taxonomy_id']=trim($_POST['taxonomy']);
		
		$insert=$vsc->insert('option_tour', $data);
		
		//check insert
		if($insert>0){
			$messages="<p class='text-success'>The option was inserted in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The option was not inserted in database !</p>";
		}
	}
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add Option</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="add_option"  method="post" >
         		 			 
         		 			 		<!-- new name -->
                                  <div class="form-group">
                                      <label>Name</label>
                                      <input type='text' name='option_name' class="form-control" required>
                                  </div>
                                  
                                  <!-- new description -->
                                  <div class="form-group">
                                      <label>Description</label>
                                      <textarea name='option_description' class="form-control" required></textarea>
                                  </div>
                                  
                                 
                                  
                                  <!-- price -->
                                  <div class="form-group">
                                      <label>Price</label>
                                      <select name='price' class='form-control'>
                                     
                                      <?php 
                                      	//select price in database
                                      	$select_prices="SELECT price_id ,price_from FROM price ";
                                      	
                                      	//return array
                                      	
                                      	$prices=$vsc->fetch_all($select_prices);
                                      
                                      	foreach ($prices as $val){
                                      		echo"
												
                                      				<option value={$val['price_id']}>".$val['price_id']."</option> 
											";
                                      	}
                                      
                                      ?>
                                      </select>
                                  </div>
                                  
                                  <!-- tour -->
                                  <div class="form-group">
                                      <label>Tour</label>
                                      <select name='tour' class='form-control'>
                                      	<option></option>
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
                                  <button type="submit"  class="btn btn-default">Add Option</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>