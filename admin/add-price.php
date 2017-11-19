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
		$data['price_year']=trim(strip_tags($_POST['price_year']));
		$data['price_from']=trim(strip_tags($_POST['price_from']));
		$data['price_promotion']=strip_tags($_POST['price_promotion']);
		$data['single_supplement']=trim(strip_tags($_POST['single_supplement']));
		$data['valid_from']=trim(strip_tags($_POST['valid_from']));
		$data['valid_to']=trim(strip_tags($_POST['valid_to']));
		$data['min_quantity']=trim(strip_tags($_POST['min']));
		$data['max_quantity']=trim(strip_tags($_POST['max']));
		$data['taxonomy_id']=trim($_POST['taxonomy']);
		
		$insert=$vsc->insert('price', $data);
		
		//check insert
		if($insert>0){
			$messages="<p class='text-success'>The price was inserted in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The price was not inserted in database !</p>";
		}
	}
?>
<section>
<script >

	function check_form()
	{
		
		var price_from=add_price.price_from.value;
		var price_promotion=add_price.price_promotion.value;
		var single_supplement=add_price.single_supplement.value;

		var warning=document.getElementsByClassName('text-warning');
		
		
		
		if(isNaN(price_from)){
			warning[1].innerHTML=" Bạn phải nhập số!";
			return false;
		}
		
		if(isNaN(price_promotion)){
			warning[2].innerHTML=" Bạn phải nhập số!";
			return false;
		}
		
		if(isNaN(single_supplement)){
			warning[3].innerHTML=" Bạn phải nhập số!";
			return false;
		}

		return true;
	}	
</script>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add Price</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="add_price"  method="post" onsubmit="return check_form();">
         		 			 
         		 			 		<!-- new price_year -->
                                  <div class="form-group">
                                      <label>Price Year</label>
                                      <p class='text-warning'></p>
                                      <input type='text' name='price_year' class="form-control" required>
                                  </div>
                                  
                                 <!-- new price_from -->
                                  <div class="form-group">
                                      <label>Price From</label>
                                      <p class='text-warning'></p>
                                      <input type='text' name='price_from' class="form-control" required>
                                  </div>
                                  
                                  <!-- price promotion -->
                                  <div class="form-group">
                                      <label>Price Promotion</label>
                                      <p class='text-warning'></p>
                                      <input type='text' name='price_promotion' class="form-control" required>
                                  </div>
                                 <!-- single_supplement -->
                                   <div class="form-group">
                                      <label>Single Supplement</label>
                                      <p class='text-warning'></p>
                                      <input type='text' name='single_supplement' class="form-control" required>
                                  </div>
                           
                                  
                                  <!--valid_from  -->
                                   <div class="form-group">
                                      <label>Valid From<small class="text-muted">( yyyy-mm-dd )</small></label>
                                      <input type='date' name='valid_from' class="form-control" required>
                                  </div>
                                  <!-- valid_to -->
                                   <div class="form-group">
                                      <label>Valid To<small class="text-muted">( yyyy-mm-dd )</small></label>
                                      <input type='date' name='valid_to' class="form-control" required>
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
                                  <button type="submit"  class="btn btn-default">Add Price</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>