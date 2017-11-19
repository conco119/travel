<?php
    require("templates/header-admin.php");
    require("templates/sidebar-admin.php");
    require("../includes/VSCPDO.php");
    $exp = new vsc_pdo("localhost,root,,travel");
 ?>
 <section >

     <div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         <h2 class="title_content_admin">Adding Tour</h2>
   </div>
   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
    <form   method="post">
      <div class="form-group">
        <label>Tour name</label>
        <input class="form-control" type="text" name="tour_name" placeholder="Tour name" autocomplete="off">
      </div>

		<!-- Banner -->
      <div class="form-group">
        <label>Banber</label>
        <?php
              $row = $exp->fetch_all("select media_id,media_title from media_travel where taxonomy_id=29 ");
         ?>

          <select class="form-control" name="banner">
            <?php foreach($row as $value){ ?>
              <option value="<?php echo $value['media_id']; ?>"><?php echo $value['media_title']; ?></option>
                <?php } ?>
          </select>

      </div>
      
      <!-- Avatar -->
		<div class="form-group">
        <label>Avatar</label>
        <?php
              $row = $exp->fetch_all("select media_id,media_title from media_travel where taxonomy_id=10");
         ?>

          <select class="form-control" name="avatar">
            <?php foreach($row as $value){ ?>
              <option value="<?php echo $value['media_id']; ?>"><?php echo $value['media_title']; ?></option>
                <?php } ?>
          </select>

      </div>
      <div class="form-group">
        <label>Taxonomy name</label>
          <?php
          $row= $exp->fetch_all("select taxonomy_name from taxonomy");
           ?>
           <select class="form-control" name="taxonomy_id">
               <?php foreach($row as $value){ ?>
               <option value="<?php echo $value['taxonomy_name']; ?>"><?php echo $value['taxonomy_name']; ?></option>
               <?php } ?>
           </select>
      </div>

      <div class="form-group">
        <label>Tour Description</label>
        <textarea rows="10" class="form-control"  name="tour_description" placeholder="Tour description" autocomplete="off"></textarea>
          <script type="text/javascript"> CKEDITOR.replace("tour_description");</script>
      </div>
      <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
  </div>
  <?php
          $error=array();
          $data=array();
          if(isset($_POST["submit"]))
          {
              if(empty($_POST["tour_name"]))
                $error["tour_name"] = "Tour name is invaild";

                if(empty($_POST["taxonomy_id"]))
                  $error["taxonomy_id"] = "Taxanomy id is invaild";
                  if(empty($_POST["tour_description"]))
                    $error["tour_description"] = "Tour description is invaild";
                
                
                if(empty($error))
                      {

                        $data["tour_name"] = $_POST["tour_name"];
                        $data["taxonomy_id"] = $_POST["taxonomy_id"];
                        $data["tour_description"] = $_POST["tour_description"];
                        $data["banner_tour"] = $_POST["banner"];
                        $data['avatar_tour']=$_POST['avatar'];
                        $check=$exp->insert("tour",$data);

                        if($check!=0)
                          echo "<script> alert('Successfully!'); </script>";
                      }
                      else{
                        echo "<script> alert('Failed!'); </script>";
                      }
          }
    ?>
 </section>
 <?php require('templates/footer-admin.php'); ?>
</body>
</html>
