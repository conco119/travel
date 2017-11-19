<!DOCTYPE html>
<html>
    <?php
    require('templates/header-admin.php');
    require("../includes/VSCPDO.php");
    require("../includes/function.php");
    $exp = new vsc_pdo("localhost,root,,travel");
    $row=$exp->fetch_one("SELECT * from tour_itinerary,tour where tour_itinerary.tour_id=tour.tour_id and tour.tour_id={$_POST['tour_id']}");

     ?>
     <script type="text/javascript">
       document.querySelector("header").style.display="none";
     </script>
  <body>
      <div class="container">
            <h2><?php echo $row["tour_name"];  ?></h2>

          <form method="post" >
              <input type="hidden" name="tour_id" value="<?php $row["tour_id"] ?>">

            <?php for($i=1;$i<=20;$i++) {?>
            <div class="form-group">
              <label >Day <?php echo $i; ?></label>
              <textarea class="form-control" name="<?php echo "day{$i}"; ?>"  rows="5"><?php echo $row["day{$i}"];?></textarea>
            </div>
            <script type="text/javascript"> CKEDITOR.replace("day<?php echo $i;  ?>");</script>
            <?php } ?>

            <div class="form-group">
              <label>Duration</label>
              <input class="form-control" type="text" name="duration" value="<?php echo $row['duration']; ?>">
            </div>

            <div class="form-group">
              <label>Note</label>
              <textarea class="form-control" rows="5" type="text" name="note" ><?php echo $row['note']; ?></textarea>
            </div>
            <script type="text/javascript"> CKEDITOR.replace("note");</script>

            <button class="btn btn-primary" type="submit" name="submit">Update</button>

          </form>

          <?php if(isset($_POST["submit"]))
              {
                try{
                  for($i=1;$i<=20;$i++)
                  {
                    $data["day{$i}"] = $_POST["day{$i}"];
                  }
                  $data["duration"] = $_POST["duration"];
                  $data["note"] = $_POST["note"];

                  $exp->update("tour_itinerary",$data,"tour_id={$_POST['tour_id']}");


                  echo "<script> alert('Thành công');</script>";
                }
                catch(PDOException $e)
                {
                  echo "<script> alert('failed');</script>";

                }
              }
           ?>
      </div>
  </body>
</html>
