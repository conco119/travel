    <?php 
    require("../includes/VSCPDO.php");
    require("../includes/class.php");
      require '../includes/function.php';
    require("templates/header-admin.php");
    require("templates/sidebar-admin.php");
  
    $vsc= new vsc_pdo("localhost,root,,travel");
 ?> 
  <script type="text/javascript">
        function check_form(){
          var child= document.add_booking.Child.value;
          var adult= document.add_booking.adult.value;
          var infant= document.add_booking.Infant.value;
          var condi= document.add_booking.conditions.value;
           if(adult=="..")
           {
             alert('Please Choose Adult!');
                return false;
           }
            if(child=="..")
            {
              alert('Please Choose Child!');
                return false;
            }
            if(infant=="..")
            {
              alert('Please Choose Infant!');
                return false;
            }
            if(condi=="..")
            {
               alert('Please Choose Condition!');
                return false;
            }

      }
  </script>
 <?php 
        // khoi tao class vsc-PDO
      
      $data=array();
      $data["departure"]=$data["condition_id"]= $data["infant"]=$data["child"]=$data["adult"]=$_POST["condi"]= $data["request"]=$data["booking_address"]=$data["tour_id"]=NULL;
      // check  submit
      if(isset($_POST["ok"]))
      {
               if($_POST["tour_id"]=="..")
               {
                $mes="<p style='color:#ff0000;'>Please Choose Tour_Name</p>";
               } 
               else
                { 
                      $data["tour_id"]=trim(strip_tags($_POST["tour_id"]));
                }
                 if(empty($_POST["txtbooking_addre"]))
                 {
                  $mes1="<p style='color:#ff0000'>Please Choose The Booking-Address!</p>";
                 }
                 else
                  { 
                      $data["booking_address"]=trim(strip_tags($_POST["txtbooking_addre"]));
                  }
                  if(empty($_POST["Request"]))
                  {
                    $mes2="<p style='color:#ff0000'>Please Choose The Request!</p>";
                  }
                  else
                  {
                    $data["request"]=trim(strip_tags($_POST["Request"]));
                  }
                    $data["departure"]=trim(strip_tags($_POST["datepicker"]));
                    $data["adult"]=trim(strip_tags($_POST["adult"]));
                    $data["child"]=trim(strip_tags($_POST["Child"]));
                    $data["infant"]=trim(strip_tags($_POST["Infant"]));
                    $data["condition_id"]=trim(strip_tags($_POST["conditions"]));
                    if($data["tour_id"] && $data["request"] && $data["booking_address"] && $data["departure"] && $data["adult"] &&  $data["child"] &&  $data["infant"] && $data["condition_id"])
                    {
                      $update= $vsc->insert("booking",$data);
                       if($update > 0)
                          { 
                              $messege="<p class='text-seccess'>The Booking was inserted database successfuly</p>";
                            redirect_to('admin/view-booking.php');  
                          }
                          else
                            {
                             $messege="<p class='text-warning'> The Booking not inserted database successfuly!</p>";
                            }
                    }
                    else
                    {
                      $messege="<p class='text-warning'>Error!</p>";
                    }
       }
  ?>
 <section>
          <div id="content_admin" class="col-md-10 col-xs-8">
            <h2 class="title_content_admin">Add Booking</h2>
             <?php 
                    if(isset($messege))
                      echo  $messege;
              ?>
          </div>
             <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
                   <form role="form" name="add_booking" method="post">
                                  <div class="form-group">
                                      <label>Tour Name</label>
                                      <?php if(isset($mes)) echo $mes; ?>
                                        <select class="form-control" name="tour_id">
                                          <option value="">..</option>
                                           <?php 
                                              $sele_tor="select * from tour";
                                              $row=$vsc->fetch_all($sele_tor);
                                                foreach ($row as $value) {
                                                  echo "<option value='$value[tour_id]'>$value[tour_name]</option>";
                                                }
                                            ?>
                                       </select>
                                          <script type="text/javascript">
                                             for (var i = 0; i <add_booking.tour_id.length ; i++) {
                                                    if(add_booking.tour_id[i].value=="<?php echo $data1['tour_id'] ?>"){
                                                      add_booking.tour_id[i].selected=true;
                                                    }
                                                  }
                                        </script>
                                  </div>  
                                  <div class="form-group">
                                    <label>Booking-Address</label>
                                     <?php if(isset($mes1)) echo $mes1; ?>
                                    <textarea type="text" class="form-control" name="txtbooking_addre" placeholder="Booking-Address">
                              <?php if(isset($data1['booking_address'])) echo htmlentities($data1['booking_address'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                  </div>
                                   <script type="text/javascript"> CKEDITOR.replace("txtbooking_addre")</script>
                                   <div class="form-group">
                                  </div>

                                   <div class="form-group col-md-2">
                                    <label >Adult</label>
                                            <select class="form-control" name="adult">
                                                  <option value="..">..</option>
                                                  <?php 
                                                    for($i=0; $i<100;$i++)
                                                    {
                                                      echo "<option value='$i'>$i</option>";
                                                    }
                                                   ?>
                                                </select>
                                               <script type="text/javascript">
                                                for (var i = 0; i <add_booking.adult.length ; i++) {
                                                    if(add_booking.adult[i].value=="<?php echo $data1['adult'] ?>"){
                                                      add_booking.adult[i].selected=true;
                                                    }
                                                  }
                                                </script>
                                  </div>                            
                                   <div class="form-group col-md-2">
                                    <label >Child</label>
                                        <select class="form-control" name="Child">
                                                  <option value="..">..</option>
                                                  <?php 
                                                    for($i=0; $i<100;$i++)
                                                    {
                                                      echo "<option value='$i'>$i</option>";
                                                    }
                                                   ?>
                                                </select>
                                               <script type="text/javascript">
                                                for (var i = 0; i <add_booking.Child.length ; i++) {
                                                    if(add_booking.Child[i].value=="<?php echo $data1['child'] ?>"){
                                                      add_booking.Child[i].selected=true;
                                                    }
                                                  }
                                                </script>
                                  </div>
                                   <div class="form-group col-md-2">
                                    <label >Infant</label>
                                             <select class="form-control" name="Infant">
                                                          <option value="..">..</option>
                                                          <?php 
                                                            for($i=0; $i<100;$i++)
                                                            {
                                                              echo "<option value='$i'>$i</option>";
                                                            }
                                                           ?>
                                                        </select>
                                                       <script type="text/javascript">
                                                        for (var i = 0; i <add_booking.Infant.length ; i++) {
                                                            if(add_booking.Infant[i].value=="<?php echo $data1['infant'] ?>"){
                                                              add_booking.Infant[i].selected=true;
                                                            }
                                                          }
                                                        </script>
                                          </div>
                                   <div class="clearfix"></div>
                                  <label for="sel1">Departure</label>
                                  <div class="form-group">
                                      <textarea type="text" class="form-control" name="datepicker">
                                     <?php if(isset($data1['departure'])) echo htmlentities($data1['departure'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                     <script type="text/javascript"> CKEDITOR.replace("datepicker")</script>
                                  </div>

                                      <div class="clearfix"></div>
                                   <div class="form-group">
                                    <label >Request</label>
                                    <textarea type="text" class="form-control" name="Request" placeholder="Request">
                                     <?php if(isset($data1['request'])) echo htmlentities($data1['request'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                     <script type="text/javascript"> CKEDITOR.replace("Request")</script>
                                  </div>

                                   <div class="form-group">
                                    <label >Condition</label>
                                      <select class="form-control" name="conditions">
                                          <option value="..">..</option>
                                           <?php 
                                              $sele_tor="select * from conditions";
                                              $row=$vsc->fetch_all($sele_tor);
                                                foreach ($row as $value) {
                                                  echo "<option value='$value[condition_id]'>$value[condition_id]</option>";
                                                }
                                            ?>
                                       </select>
                                        <script type="text/javascript">
                                             for (var i = 0; i <add_booking.conditions.length ; i++) {
                                                    if(add_booking.conditions[i].value=="<?php echo $data1['condition_id'] ?>"){
                                                      add_booking.conditions[i].selected=true;
                                                    }
                                                  }
                                        </script>
                                  </div>

                                  <button type="submit" name="ok"  class="btn btn-default" onclick="return check_form();">Submit</button>
                    </form>
             </div>
 </section> 
 <?php 
      require("templates/footer-admin.php");
  ?>S