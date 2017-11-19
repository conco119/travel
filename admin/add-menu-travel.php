    <?php 
    require("../includes/VSCPDO.php");
    require("../includes/class.php");
    require("../includes/function.php");
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?> 
 <?php 
    if(isset($_POST["ok"]))
    {
      $vsc= new vsc_pdo("localhost,root,,travel");
          $data=array();
            $data['taxonomy_id']=$data["menu_name"]=NULL;
           if($_POST['taxonomy_id']=="..")
                     {
                      $messege2="<p style='color:#ff0000;'>Please Choose The Taxonomy!</p>"; 
                     }
                     else
                     {
                       $data['taxonomy_id']=trim(strip_tags($_POST["taxonomy_id"]));
                     }
               $data["menu_name"]=trim(strip_tags($_POST["menu-name"]));
                      if($data["menu_name"] && $data['taxonomy_id'])
                      {
                                  $insert_id=$vsc->insert("menu_travel",$data);
                                  //check insert
                                   if($insert_id >1)
                                    { 
                                        $messege="<p class='text-success'> The Menu Travel was inserted database successfully!</p>";
                                    }
                                    else
                                      { 
                                          $messege="<p class='text-warning'> The Menu Travel was not inseerted database successfully</p>";
                                      }
                      }
                      else
                      {
                        $messege="<p style='color:#FF0000;'>Có lỗi</p>";
                      }

    }
  ?>
 <section>
 				<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add Menu Travel</h2>
               <?php 
                    if( isset($messege)) echo $messege;
                ?>
         		</div>
         		  <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			<form role="form" method="post" name="add_menu">
         		 				 <div class="form-group">
                        <label >Menu-Name</label>
                      <input type="text" class="form-control" name="menu-name" placeholder="" value="<?php if(isset($_POST['menu-name'])) echo htmlentities($_POST['menu-name'],ENT_COMPAT,'UTF-8'); ?>" required>
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
                                          for (var i = 0; i <add_menu.taxonomy_id.length ; i++) {
                                              if(add_menu.taxonomy_id[i].value=="<?php echo $_POST['taxonomy_id'] ?>"){
                                                add_menu.taxonomy_id[i].selected=true;
                                              }
                                            }
                                          </script>
                                  </div>
                        <button type="submit" name="ok" value="Add_menu" class="btn btn-default">Submit</button>
         		 			</form>
         		  </div>

 </section>		