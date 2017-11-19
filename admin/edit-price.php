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
	//check price_id in url
	if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min-range'=>1))){
		$id=$_GET['id'];
	}
	else {
		redirect_to('admin/view-nationality.php');
	}
	//check submit
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$data=array();
		$data['price_year']=trim(strip_tags($_POST['price_year']));
		$data['price_from']=trim(strip_tags($_POST['price_from']));
		$data['price_promotion']=strip_tags($_POST['price_promotion']);
		$data['single_supplement']=trim(strip_tags($_POST['single_supplement']));
		$data['valid_from']=trim(strip_tags($_POST['valid_from']));
		$data['valid_to']=trim(strip_tags($_POST['valid_to']));
		$data['min_quantity']=trim(strip_tags($_POST['min']));
		$data['max_quantity']=trim(strip_tags($_POST['max']));
		$data['taxonomy_id']=trim($_POST['taxonomy']);
		
		
		
		//check update
		if($vsc->update('price', $data,"price_id=$id")){
			$messages="<p class='text-success'>The price was updated in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The price was not updated in database !</p>";
		}
	}
	
	//select price with price_id
	$select_price="SELECT p.price_year,p.price_from,p.price_promotion,p.single_supplement,p.valid_from,p.valid_to,p.min_quantity,p.max_quantity,t.taxonomy_id";
	$select_price.=" FROM price as p ";
	$select_price.=" INNER JOIN taxonomy as t ON p.taxonomy_id=t.taxonomy_id ";
	$select_price.=" WHERE p.price_id=$id";
	
	$price=$vsc->fetch_one($select_price);
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Edit Price</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="edit_price"  method="post" >
         		 			 
         		 			 		<!-- new price_year -->
                                  <div class="form-group">
                                      <label>Price Year</label>
                                      <input type='text' name='price_year' class="form-control" required value="<?php if (isset($price)) echo htmlentities($price['price_year'],ENT_COMPAT,'UTF-8');?>" >
                                  </div>
                                  
                                 <!-- new price_from -->
                                  <div class="form-group">
                                      <label>Price From</label>
                                      <input type='text' name='price_from' class="form-control" required value="<?php if (isset($price)) echo htmlentities($price['price_from'],ENT_COMPAT,'UTF-8');?>">
                                  </div>
                                  
                                  <!-- price promotion -->
                                  <div class="form-group">
                                      <label>Price Promotion</label>
                                      <input type='text' name='price_promotion' class="form-control" required value="<?php if (isset($price)) echo htmlentities($price['price_promotion'],ENT_COMPAT,'UTF-8');?>">
                                  </div>
                                 <!-- single_supplement -->
                                   <div class="form-group">
                                      <label>Single Supplement</label>
                                      <input type='text' name='single_supplement' class="form-control" required value="<?php if (isset($price)) echo htmlentities($price['single_supplement'],ENT_COMPAT,'UTF-8');?>">
                                  </div>
                           
                                  
                                  <!--valid_from  -->
                                   <div class="form-group">
                                      <label>Valid From</label>
                                      <input type='date' name='valid_from' class="form-control" required value="<?php if (isset($price)) echo htmlentities($price['valid_from'],ENT_COMPAT,'UTF-8');?>">
                                  </div>
                                  <!-- valid_to -->
                                   <div class="form-group">
                                      <label>Valid To</label>
                                      <input type='date' name='valid_to' class="form-control" required value="<?php if (isset($price)) echo htmlentities($price['valid_to'],ENT_COMPAT,'UTF-8');?>">
                                  </div>
                                  <!-- min quantity -->
                                   <div class="form-group">
                                      <label>Min Quantity</label>
                                      <select name='min' class='form-control'>
                                      	<option>1</option>
                                      	<option>2</option>
                                      	<option>3</option>
                                      	<option>4</option>
                                      	<option>5</option>
                                      	<option>6</option>
                                      	<option>7</option>
                                      	<option>8</option>
                                      	
                                      </select>
                                      <script type="text/javascript">
										for(var i=0;i<edit_price.min.length;i++){
											if(edit_price.min[i].value=="<?php echo $price['min_quantity'];?>")
												edit_price.min[i].selected=true;
										}
                                      </script>
                                  </div>
                                  <!-- max quantity -->
                                   <div class="form-group">
                                      <label>Max Quantity</label>
                                      <select name='max' class='form-control'>
                                      	<option>1</option>
                                      	<option>2</option>
                                      	<option>3</option>
                                      	<option>4</option>
                                      	<option>5</option>
                                      	<option>6</option>
                                      	<option>7</option>
                                      	<option>8</option>
                                      	<option>9</option>
                                      	<option>10</option>
                                      	<option>11</option>
                                      	<option>12</option>
                                      	<option>13</option>
                                      	<option>14</option>
                                      	<option>15</option>
                                      	<option>16</option>
                                      	
                                      </select>
                                      <script type="text/javascript">
										for(var i=0;i<edit_price.max.length;i++){
											if(edit_price.max[i].value=="<?php echo $price['max_quantity'];?>")
												edit_price.max[i].selected=true;
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
										for(var i=0;i<edit_price.taxonomy.length;i++){
											if(edit_price.taxonomy[i].value=="<?php echo $price['taxonomy_id'];?>")
												edit_price.taxonomy[i].selected=true;
										}
                                      </script>
                                  </div>
                                  <button type="submit"  class="btn btn-default">Edit Price</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>