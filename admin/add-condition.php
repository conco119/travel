   <?php 
	    require("../includes/VSCPDO.php");
      require("../includes/class.php");
      require("../includes/function.php");
      require("templates/header-admin.php");
		  require("templates/sidebar-admin.php");
 ?> 
  <?php 
        //  khoi tao bien
    $vsc= new vsc_pdo("localhost,root,,travel");
    // check submit 
     if(isset($_POST["ok"]))
     {
      $data=array(); 
       $data['condition_content']=trim(strip_tags($_POST["Condition-name"])); 

        $insert_id=$vsc->insert('conditions',$data);
         // Check Inert
         if($insert_id > 0)
          { 
              $messege="<p class='text-seccess'>The Condition was inserted database successfuly</p>";
          }
          else
            {
             $messege="<p class='text-warning'> The Condition not inserted database successfuly!</p>";
            }
     }
   ?>
  <section>
 			  	<div id="content_admin" class="col-md-10 col-xs-8">
         		<h2 class="title_content_admin">Add Condition</h2>
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
                                      <textarea type="text" class="form-control" name="Condition-name" placeholder="Condition-name">
                                    <?php if(isset($_POST['Condition-name'])) echo htmlentities($_POST['Condition-name'],ENT_COMPAT,'UTF-8'); ?> 
                                      </textarea>
                                  </div>
                                   <script type="text/javascript">CKEDITOR.replace("Condition-name")</script>
                                  <button type="submit" name="ok"  class="btn btn-default">Submit</button>
                    </form>
         		 </div>
 </section>		