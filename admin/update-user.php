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
            <th>user_id</th>
            <th>user_name</th>
            <th>user_pass</th>
            <th>user_gender</th>
            <th>user_phone</th>
            <th>user_email</th>
            <th>level</th>
            <th>nationality_id</th>

          </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_POST["sub-up"])){
            if(!empty($_POST["user_id"]))
            {
              $exp = new vsc_pdo("localhost,root,,travel");
              $sql="select * from users where user_id={$_POST['user_id']}";
              $newr = $exp-> fetch_one($sql);

         ?>
         <form method="post">
          <th><?php echo $newr["user_id"]; ?></th>
          <input type="hidden" name="user_id" value="<?php echo $newr["user_id"]; ?>">
          <th><input type="text" name="user_name" value="<?php echo $newr["user_name"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="user_pass" value="<?php echo $newr["user_pass"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="user_gender" value="<?php echo $newr["user_gender"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="user_phone" value="<?php echo $newr["user_phone"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="user_email " value="<?php echo $newr["user_email"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="level" value="<?php echo $newr["level"]; ?>" autocomplete="off"></th>
          <th><input type="text" name="nationality_id" value="<?php echo $newr["nationality_id"]; ?>" autocomplete="off"></th>



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
                      $data["user_id"] =$_POST["user_id"];
                      $data["user_name"] =$_POST["user_name"];
                      $data["user_pass"] =$_POST["user_pass"];
                      $data["user_gender"] =$_POST["user_gender"];
                      $data["user_phone"] =$_POST["user_phone"];
                      $data["user_email"] =$_POST["user_email"];
                      $data["level"] =$_POST["level"];
                      $data["nationality_id"] =$_POST["nationality_id"];

                      $exp = new vsc_pdo("localhost,root,,travel");
                      $exp->update("users",$data,"user_id={$_POST['user_id']}");
                      header("location: view-user.php");

                    }
                 ?>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
