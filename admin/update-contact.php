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
              <th>ID</th>
              <th>Contact-name</th>
              <th>Contact-email</th>
              <th>Contact-Phone</th>
              <th>Nationlity</th>
              <th>Contact-Infor</th>

          </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_POST["sub-up"])){
            if(!empty($_POST["contact_id"]))
            {
              $exp = new vsc_pdo("localhost,root,,travel");
              $sql="select * from contact where contact_id={$_POST['contact_id']}";
              $newr = $exp-> fetch_one($sql);

         ?>
         <form method="post">
          <th><?php echo $newr["contact_id"]; ?></th>
          <input type="hidden" name="contact_id" value="<?php echo $newr["contact_id"]; ?>">
          <th><input type="text" name="contact_name" value="<?php echo $newr["contact_name"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="contact_email" value="<?php echo $newr["contact_email"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="contact_phone" value="<?php echo $newr["contact_phone"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="nationality_id" value="<?php echo $newr["nationality_id"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="contact_info" value="<?php echo $newr["contact_info"]; ?>" autocomplete="off"></th>

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
                      $data["contact_name"] =$_POST["contact_name"];
                      $data["contact_email"] =$_POST["contact_email"];
                      $data["contact_phone"] =$_POST["contact_phone"];
                      $data["nationality_id"] =$_POST["nationality_id"];
                      $data["contact_info"] =$_POST["contact_info"];
                      $exp = new vsc_pdo("localhost,root,,travel");
                      $exp->update("contact",$data,"contact_id={$_POST['contact_id']}");
                      header("location: view-contact.php");

                    }
                 ?>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
