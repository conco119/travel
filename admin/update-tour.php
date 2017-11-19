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
              <th>Tour ID</th>
              <th>Tour-name</th>
              <th>tour_description</th>
              <th>taxonomy_id</th>
              <th>media_id</th>

          </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_POST["sub-up"])){
            if(!empty($_POST["tour_id"]))
            {
              $exp = new vsc_pdo("localhost,root,,travel");
              $sql="select * from tour where tour_id={$_POST['tour_id']}";
              $newr = $exp-> fetch_one($sql);

         ?>
         <form method="post">
          <th><?php echo $newr["tour_id"]; ?></th>
          <input type="hidden" name="tour_id" value="<?php echo $newr["tour_id"]; ?>">
          <th><input type="text" name="tour_name" value="<?php echo $newr["tour_name"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="tour_description" value="<?php echo $newr["tour_description"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="taxonomy_id" value="<?php echo $newr["taxonomy_id"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="media_id" value="<?php echo $newr["media_id"]; ?>" autocomplete="off"></th>


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
                      $data["tour_name"] =$_POST["tour_name"];
                      $data["tour_description"] =$_POST["tour_description"];
                      $data["taxonomy_id"] =$_POST["taxonomy_id"];
                      $data["media_id"] =$_POST["media_id"];
                      $exp = new vsc_pdo("localhost,root,,travel");
                      $exp->update("tour",$data,"tour_id={$_POST['tour_id']}");
                      header("location: view-tour.php");

                    }
                 ?>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
