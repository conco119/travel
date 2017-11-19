   <?php
   session_start();
    require("../includes/VSCPDO.php");
    require("../includes/class.php");
    require("../includes/function.php");
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?> 
<?php 
          $vsc= new vsc_pdo("localhost,root,,travel");
          // check submit
           if(isset($_POST["ok"]))
           {
            $data=array();   
            $data['media_title']= $data['media_link']=$data['media_name']=$data['taxonomy_id']=NULL;
             $target_fil=$media_title=$image=$media_link=$taxonomy_id=NULL;
             $target_dir="../library/image/";
              $data['media_title']=trim(strip_tags($_POST["media-title"]));
              if($_FILES["image"]["error"]>0)
                {
                  $messege1="<p class='text-warning'>*Please Choose The Images!</p>"; 
                }
              else
                 {
                  $data['media_name']=$_FILES["image"]["name"];
                  $data['media_link']=$target_dir.$_FILES["image"]["name"];
                  }
                if($_POST["taxonomy_id"]=="..")
                     {
                      $messege2="<p style='color:#ff0000;'>Please Choose The Taxonomy!</p>"; 
                     }
                     else
                     {
                       $data['taxonomy_id']=trim(strip_tags($_POST["taxonomy_id"]));
                     }
                      if($data['media_title'] && $data['media_link'] && $data['media_name'] && $data['taxonomy_id'])
                      {
                          $insert_id=$vsc->insert('media_travel',$data);
                            move_uploaded_file($_FILES["image"]["tmp_name"],"../library/image/".$_FILES["image"]["name"]);
                          // Check Inert
                          if($insert_id > 0)
                          { 
                              $messege="<p class='text-seccess'>The Media-Travel was inserted database successfuly</p>";
                          }
                          else
                          {
                             $messege="<p class='text-warning'> The Media-Travel not inserted database successfuly!</p>";
                          }
                      }
           }
?>
<section>
				<div id="content_admin" class="col-md-10 col-xs-8" >
         			<h2 class="title_content_admin">Add Media-Travel</h2>
              <?php 
                  if(isset($messege))
                     echo $messege;
               ?>
         		</div>
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 		 <form role="form"  method="post" name="add_media" enctype="multipart/form-data">
         		 		 		 <div class="form-group">
                                <div class="form-group">
                                    <label >Media-Title</label>
                                    <input type="text" class="form-control" name="media-title" placeholder="" value="<?php if(isset($_POST['media-title'])) echo htmlentities($_POST['media-title'],ENT_COMPAT,'UTF-8'); ?>" required>
                                  </div>
                                   <div class="form-group ">
                                    <label for="exampleInputPassword1">Hình ảnh</label>
                                      <?php  if(isset($messege1)) echo $messege1; ?>
                                    <input type="file" size="50"  name="image"/>
                                  </div>
                                   <div class="form-group">
                                      <label>Taxonomy</label>
                                      <div class="clear-fix"></div>
                                      <?php if(isset($messege2)) echo $messege2;?>
                                        <select class="form-control" name="taxonomy_id">
                  									  		<option value="..">..</option>
                                              <?php 

                                                    $sel_taxo="select * from taxonomy";
                                                    $row= $vsc->fetch_all($sel_taxo);
                                                    foreach ($row as $value) 
                                                       {
                                                          echo"<option value='$value[taxonomy_id]'>$value[taxonomy_name]</option>";  
                                                       }                
                                              ?>
                  									  		
									                     </select>
                                        <script type="text/javascript">
                                          for (var i = 0; i <add_media.taxonomy_id.length ; i++) {
                                              if(add_media.taxonomy_id[i].value=="<?php echo $_POST['taxonomy_id'] ?>"){
                                                add_media.taxonomy_id[i].selected=true;
                                              }
                                            }
                                          </script>
                                  </div>
                                  <button type="submit" name="ok" class="btn btn-default">Submit</button>
         		 		 </form>
         		 </div>

</section>	