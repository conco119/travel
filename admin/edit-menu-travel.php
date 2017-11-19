<?php 
	require '../includes/class.php';
	require '../includes/VSCPDO.php';
	require '../includes/function.php';
	require 'templates/header-admin.php';
	require 'templates/sidebar-admin.php';
	$id=$_GET["id"];
	  $vsc= new vsc_pdo("localhost,root,,travel");
	  $select="select * from menu_travel where menu_id=$id";
	  $data=$vsc->fetch_one($select);
	   if(isset($_POST["ok"]))
	   {
	   	     $data1=array(); 
	   	     $data1["menu_name"]=trim(strip_tags($_POST["menu_name"])); 
	   	     $data1["taxonomy_id"]=trim(strip_tags($_POST["taxonomy_id"])); 
	   	     if($data1["menu_name"] && $data1["taxonomy_id"])
	   	     {
	   	     	 $update=$vsc->update("menu_travel",$data1,"menu_id=$id");
	   	     	  if($update> 1)
	   	     	  	{ 
	   	     	  			$messege="<p class='text-warning'>The Menu-Travel was updated database succesfully!</p>";
	   	     	  	}
	   	     	  	else 
	   	     	  	{ 
	   	     	  		$messege="<p class='text-warning'>The Menu-Travel was not updated database succesfully!</p>";
	   	     	  	}

	   	     }
	   	      else
	   	      {
	   	      	$messege="<p class='text-warning'> Error</p>";
	   	      }
	   }
 ?>
 <section>
 			<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Edit Menu Travel</h2>
               <?php 
                    if( isset($messege)) echo $messege;
                ?>
         		</div>
         		  <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			<form role="form" method="post" name="edit_menu">
         		 				 <div class="form-group">
                        <label >Menu-Name</label>
                      <input type="text" class="form-control" name="menu_name" placeholder="" value="<?php if(isset($data['menu_name'])) echo htmlentities($data['menu_name'],ENT_COMPAT,'UTF-8'); ?>" required>
                      </div>
                                  <div class="form-group">
                                     <label>Taxonomy</label>
                                      <?php if(isset($messege2)) echo $messege2;?>
                                    	<select class="form-control" name="taxonomy_id">
                									  	<option value="..">..</option>
                									  		<?php 
                                           $vsc1= new vsc_pdo("localhost,root,,travel");
                                      $select_taxo="SELECT `taxonomy_id`, `taxonomy_name`, `taxonomy_type` FROM `taxonomy`";             
                                            $row=$vsc1->fetch_all($select_taxo);
                                            foreach ($row as $value) {
                                          echo"<option value='$value[taxonomy_id]'>$value[taxonomy_name]</option>";
                                                                  }      
                                         ?>
								                    	</select>
                                         <script type="text/javascript">
                                          for (var i = 0; i <edit_menu.taxonomy_id.length ; i++) {
                                              if(edit_menu.taxonomy_id[i].value=="<?php echo $data['taxonomy_id'] ?>"){
                                                edit_menu.taxonomy_id[i].selected=true;
                                              }
                                            }
                                          </script>
                                  </div>
                        <button type="submit" name="ok" value="Add_menu" class="btn btn-default">Submit</button>
         		 			</form>
         		  </div>

 </section>