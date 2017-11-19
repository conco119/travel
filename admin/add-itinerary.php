<?php
    require("templates/header-admin.php");
    require("templates/sidebar-admin.php");
    require("../includes/VSCPDO.php");
    $exp = new vsc_pdo("localhost,root,,travel");
 ?>
 <section >

     <div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         <h2 class="title_content_admin">Adding Itinerary</h2>
   </div>
   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
    <form   method="post">
      <div class="form-group">
        <label>Tour name</label>
        <select class="form-control" name="tour_id">

            <?php
              $row = $exp->fetch_all("select tour_id,tour_name from tour");
              foreach($row as $value){
               ?>
             <option value="<?php echo $value['tour_id'] ?>"><?php echo $value['tour_name']; ?></option> <?php } ?>
        </select>
      </div>
      <?php for($i=1;$i<=20;$i++){ ?>

      <div class="form-group">
        <label>Day <?php echo $i ?></label>
        <textarea class="form-control" type="text" name="day<?php echo $i ?>" placeholder="Day <?php echo $i ?>" autocomplete="off" rows="5"></textarea>
      </div>
        <script type="text/javascript"> CKEDITOR.replace("day<?php echo $i;  ?>");</script>
      <?php } ?>
      <div class="form-group">
        <label>Duration</label>
        <input class="form-control" name="duration"  autocomplete="off" placeholder="Duration">
      </div>
      <div class="form-group">
        <label>Note</label>
        <textarea class="form-control" name="note" rows="4" autocomplete="off" placeholder="Note"></textarea>
      </div>
      <script type="text/javascript"> CKEDITOR.replace("note");</script>


      <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>

  </div>
  <?php

          $data=array();
          if(isset($_POST["submit"]))
          {

                        for($i=1;$i<=20;$i++){
                        $data["day$i"] = $_POST["day$i"];
                        }
                        $data["duration"] =$_POST["duration"];
                        $data["note"] = $_POST["note"];
                        $data["tour_id"] = $_POST["tour_id"];
                        $check=$exp->insert("tour_itinerary",$data);
                        if($check!=0 || $check==0)
                          echo "<script> alert('Thêm thành công!'); </script>";
                        else
                          echo "<script> alert('Thêm thất bại!'); </script>";
                      }

    ?>
 </section>
 <?php require('templates/footer-admin.php'); ?>
</body>
</html>
