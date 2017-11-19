  <?php 
	require '../includes/class.php';
	require '../includes/VSCPDO.php';
	require '../includes/function.php';
	require 'templates/header-admin.php';
	require 'templates/sidebar-admin.php';
	$id=$_GET["id"];
	// khoi tao bien vsc
 		 $vsc= new vsc_pdo("localhost,root,,travel");
 		  $select_cod="select * from conditions where condition_id=$id";
		  $data= $vsc->fetch_one($select_cod);

		if(isset($_POST["ok"]))
     		{
      		$data=array(); 
     	 	$data['condition_content']=trim(strip_tags($_POST["Condition-name"])); 
        	$update_id=$vsc->update('conditions',$data,"condition_id=$id");
         // Check Inert
        	 if($update_id > 0)
          { 
              $messege="<p class='text-seccess'>The Condition was updated database successfuly</p>";
          }
          else
            {
             $messege="<p class='text-warning'> The Condition not updated database successfuly!</p>";
            }
     }
?>

 <section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         		<h2 class="title_content_admin">Update Condition</h2>
             <?php 
                  if(isset($messege))
                   echo $messege; 
              ?>
         	</div>
              <form role="form"  method="post">
         		 <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
                   <form role="form" name="add_booking" method="post">
                                  <div class="form-group">
                                    <label >Condition-Name</label>
                                      <input type="text" class="form-control" name="Condition-name" placeholder="Condition-name" value="<?php if(isset($data['condition_content'])) echo htmlentities($data['condition_content'],ENT_COMPAT,'UTF-8'); ?>" required>
                                  </div>
                                  <button type="submit" name="ok"  class="btn btn-default">Submit</button>
                    </form>
         		 </div>
 </section>		
<?php 
	require 'templates/footer-admin.php';
?>