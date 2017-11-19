<!DOCTYPE html>
<html>
    <?php
    require('templates/header-admin.php');
    require("../includes/VSCPDO.php");
     ?>
     <script type="text/javascript">
       document.querySelector("header").style.display="none";
     </script>
  <body>
      <div class="container">

        <div class="row">


    <table class="table  table-bordered">
      <thead>
          <tr>
              <th>taxonomy ID</th>
              <th>taxonomy name</th>
              <th>taxonomy type</th>


          </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_POST["sub-up"])){
            if(!empty($_POST["taxonomy_id"]))
            {
              $exp = new vsc_pdo("localhost,root,,travel");
              $sql="select * from taxonomy where taxonomy_id={$_POST['taxonomy_id']}";
              $newr = $exp-> fetch_one($sql);

         ?>
         <form method="post">
          <th><?php echo $newr["taxonomy_id"]; ?></th>
          <input type="hidden" name="taxonomy_id" value="<?php echo $newr["taxonomy_id"]; ?>">
          <th><input type="text" name="taxonomy_name" value="<?php echo $newr["taxonomy_name"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="taxonomy_type" value="<?php echo $newr["taxonomy_type"]; ?>" autocomplete="off"></th>



        <?php
            }
          }
         ?>
      </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-5 col-ms-4 col-ms-offset-4" >

                <button onclick="return confirm('Are you sure')" class="btn btn-primary" type="submit" name="submit">Update</button>
                <?php
                    if(isset($_POST["submit"]))
                    {
                      $data["taxonomy_name"] =$_POST["taxonomy_name"];
                      $data["taxonomy_type"] =$_POST["taxonomy_type"];

                      $exp = new vsc_pdo("localhost,root,,travel");
                      $exp->update("taxonomy",$data,"taxonomy_id={$_POST['taxonomy_id']}");
                      header("location: view-taxonomy.php");

                    }
                 ?>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
