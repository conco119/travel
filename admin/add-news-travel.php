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
		$data['new_title']=trim(strip_tags($_POST['new_title']));
		$data['new_description']=trim(strip_tags($_POST['new_description']));
		$data['new_content']=trim(strip_tags($_POST['new_content']));
		$data['post_date']=date('Y-m-d');
		$data['taxonomy_id']=trim($_POST['taxonomy']);
		
		$new_travel_id=$vsc->insert('news_travel', $data);
		
		//check insert
		if($new_travel_id>0){
			$messages="<p class='text-success'>The new travel was inserted in database successfully !</p>";
		}
		else {
			$messages="<p class='text-warning'>The new travel was not inserted in database !</p>";
		}
	}
?>
<section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add News Travel</h2>
         			<?php 
         				if(isset($messages))  echo $messages;
         			?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" name="add_news_travel"  method="post" >
         		 			 
         		 			 		<!-- new title -->
                                  <div class="form-group">
                                      <label>Title</label>
                                      <input type='text' name='new_title' class="form-control" required>
                                  </div>
                                  
                                  <!-- new description -->
                                  <div class="form-group">
                                      <label>Description</label>
                                      <textarea name='new_description' class="form-control" required></textarea>
                                  </div>
                                  
                                  <!-- new content -->
                                  <div class="form-group">
                                      <label>Content</label>
                                       <textarea name='new_content' id='new_content' class="form-control" required></textarea>
                                       <script type="text/javascript">
											
											config={};
											config.entities_latin=false;
											//load the VieNamese interface
											config.language='vi';
											//replace <textarea id=''new_content> with a ckeditor
											CKEDITOR.replace('new_content',config);
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
                                      	$taxs=array();
                                      	$taxs=$vsc->fetch_all($select_taxs);
                                      
                                      	foreach ($taxs as $val){
                                      		echo"
												
                                      				<option value={$val['taxonomy_id']}>".$val['taxonomy_name']."</option> 
											";
                                      	}
                                      
                                      ?>
                                      </select>
                                  </div>
                                  <button type="submit"  class="btn btn-default">Add News Travel</button>
                    </form>
         	
		 	</div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>