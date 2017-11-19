<?php
    require("templates/header-admin.php");
    require("templates/sidebar-admin.php");
    require("../includes/VSCPDO.php");
    $exp = new vsc_pdo("localhost,root,,travel");
 ?>
 <section >

     <div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         <h2 class="title_content_admin">Adding Users</h2>
   </div>
   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
    <form   method="post">
      <div class="form-group">
        <label>User name</label>
        <input class="form-control" type="text" name="user_name" placeholder="User name" autocomplete="off">
      </div>

      <div class="form-group">
        <label>User pass</label>
        <input class="form-control" type="text" name="user_pass" placeholder="User pasword" autocomplete="off">
      </div>

      <div class="form-group">
        <label>User gender</label>
        <select class="form-control" name="user_gender">
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
        </select>
      </div>

      <div class="form-group">
        <label>User_phone</label>
        <input class="form-control" type="text" name="user_phone" placeholder="user_phone" autocomplete="off">
      </div>

      <div class="form-group">
        <label>User email	</label>
        <input class="form-control" type="text" name="user_email" placeholder="user_email" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Level</label>
        <input class="form-control" type="text" name="level" placeholder="level" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Nationality Name</label>
        <select class="form-control" name="nationality_id">

            <?php
              $row = $exp->fetch_all("select * from nationality");
              foreach($row as $value){
               ?>
             <option value="<?php echo $value['nationality_id'] ?>"><?php echo $value['nationality_name']; ?></option> <?php } ?>
        </select>
      </div>
      <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
  </div>
  <?php
          $error=array();
          $data=array();
          if(isset($_POST["submit"]))
          {
              if(empty($_POST["user_name"]))
                $error["user_name"] = "user_name is invaild";

                if(empty($_POST["user_pass"]))
                  $error["user_pass"] = "user_pass is invaild";
                  if(empty($_POST["user_gender"]))
                    $error["user_gender"] = "user_gender is invaild";
                if(empty($_POST["user_phone"]))
                        $error["user_phone"] = "user_phone error";

                        if(empty($_POST["user_email"]))
                                $error["user_email"] = "user_email error";
                                if(empty($_POST["level"]))
                                        $error["level"] = "level error";

                      if(empty($_POST["nationality_id"]))
                                $error["nationality_id"] = "nationality_id error";
                if(empty($error))
                      {

                        $data["user_name"] = $_POST["user_name"];
                        $data["user_pass"] = $_POST["user_pass"];
                        $data["user_gender"] = $_POST["user_gender"];
                        $data["user_phone"] = $_POST["user_phone"];
                        $data["user_email"] = $_POST["user_email"];
                        $data["level"] = $_POST["level"];
                        $data["nationality_id"] = $_POST["nationality_id"];

                        $check=$exp->insert("users",$data);
                        if($check!=0)
                          echo "<script> alert('Successfully!'); </script>";
                      }
          }
    ?>
 </section>
 <?php require('templates/footer-admin.php'); ?>
</body>
</html>
