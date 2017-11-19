<?php
    require("templates/header-admin.php");
    require("templates/sidebar-admin.php");
    require("../includes/VSCPDO.php");
    $exp = new vsc_pdo("localhost,root,,travel");
 ?>
 <section >

     <div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         <h2 class="title_content_admin">Adding Taxanomy</h2>
   </div>
   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
    <form   method="post">
      <div class="form-group">
        <label>Taxonomy name</label>
        <input class="form-control" type="text" name="taxonomy_name" placeholder="Taxonomy name" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Taxonomy type</label>
        <input class="form-control" type="text" name="taxonomy_type" placeholder="Taxonomy type" autocomplete="off">
      </div>


      <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
  </div>
  <?php
          $error=array();
          $data=array();
          if(isset($_POST["submit"]))
          {
              if(empty($_POST["taxonomy_name"]))
                $error["taxonomy_name"] = "taxonomy name is invaild";

                if(empty($_POST["taxonomy_type"]))
                  $error["taxonomy_type"] = "Taxanomy type id is invaild";

                if(empty($error))
                      {

                        $data["taxonomy_name"] = $_POST["taxonomy_name"];
                        $data["taxonomy_type"] = $_POST["taxonomy_type"];
                        $check=$exp->insert("taxonomy",$data);
                        if($check!=0)
                          echo "<script> alert('Successfully!'); </script>";
                      }
          }
    ?>
 </section>
 <?php require('templates/footer-admin.php'); ?>
</body>
</html>
