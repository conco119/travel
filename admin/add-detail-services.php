      <?php 
   require("../includes/VSCPDO.php");
    require("../includes/class.php");
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?> 
  <?php 
           if(isset($_POST["ok"]))
            { 
              // khai bao 
              $vsc= new vsc_pdo("localhost,root,,travel");
               $data=array();
                 $data["option_id"]=$data["service_not_include"]=$data["service_include"]=$data["service_note"]=$data["service_departure"]=$data["service_about"]=$data["service_hightligh"]=$data["service_itinerary"]=$data["service_title"]=NULL;
                if($_POST["option_id"]=="..")
                {
                  $messege="<p style='color:#ff0000;'>Please Choose The Option-name</p>";
                }
                else
                  { 
                    $data["option_id"]=trim(strip_tags($_POST["option_id"]));
                  }
                 if($_POST["service_id"]=="..")
                 {
                  $messege1="<p style=' color:#ff0000'>Please Choose The Servicer</p>";
                 }
                  else
                    { 
                    $data["service_id"]=trim(strip_tags($_POST["service_id"])); 
                    } 
                 //  kiem tra xem da nhap bài services-Title chua 
                      if(empty($_POST["txtser"]))
                        {
                         $messege2="<p style='color:#ff0000;'> Please Choose The Services-Titles</p>";
                        }
                        else 
                          { 
                            $data["service_title"]=trim(strip_tags($_POST["txtser"]));
                           }
                         // kiem tra xem da nhap Services-Itinerary chuwa 
 				             $data["service_itinerary"]=trim(strip_tags($_POST["Services-Itinerary"]));
                            
                                  
                               //Hight light 
                             $data["service_hightligh"]=trim(strip_tags($_POST["txthight"]));
                              
                                   // KIEM TRA XME DA NHAP  Services-About CHUWA 
                                   if( empty($_POST["ser-about"]))
                                    { 
                                   $messege5="<p style='color:#ff0000'> Please Choose The Services-About</p>";
                                   }
                                else 
                                  {
                                      $data["service_about"]=trim(strip_tags($_POST["ser-about"]));
                                  }  
                                  // kiem tra departure 
                                            $data["service_departure"]=trim(strip_tags($_POST["ser-depart"]));
                                    
                                // kiem tra note
								   $data["service_note"]=trim(strip_tags($_POST["ser-note"]));
                                         
                                            //include
				                   $data["service_include"]=trim(strip_tags($_POST["Ser-include"]));
                                       
                                            //unclude
	                             $data["service_not_include"]=trim(strip_tags($_POST["Ser-Unclude"]));
                                       
                         if($data["option_id"] && $data["service_id"] &&  $data["service_title"] )
                                             {
                                                        $insert=$vsc->insert("detail_service",$data);
                                  //check insert
                                                     if($insert >0)
                                                      { 
                                                          $messege10="<p class='text-success'> The Detail-Services was inserted database successfully!</p>";
                                                      }
                                                      else
                                                        { 
                                                            $messege10="<p class='text-warning'> The Detail-Services  was not inseerted database successfully</p>";
                                                        }
                                             }
                                              else 
                                                {
                                                 $messege10="<p class='text-warning'> Error</p>"; 
                                                }
            }
   ?>
 <section>
 				<div id="content_admin" class="col-md-10 col-xs-8">
         			<h2 class="title_content_admin">Add Detail-Services</h2>
              <?php 
               // echo $data["option_id"]."</br>";
              // echo $data["service_id"]."</br>"; 
              // echo $data["service_title"]."</br>"; 
              // echo $data["service_itinerary"]."</br>";
              // echo $data["service_hightligh"]."</br>"; 
              // echo $data["service_about"]."</br>";
              // echo $data["service_departure"]."</br>";
              // echo $data["service_note"]."</br>";
              // echo $data["service_include"]."</br>"; 
              // echo $data["service_not_include"]."</br>"; 
                  if(isset( $messege10))
                  echo $messege10;
               ?>
         		</div>
         		  <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
         		 			 <form role="form" method="post" name="add_detail">
                                  <div class="form-group">
                                    <label>Option-Name</label>
                                     <?php  if(isset($messege))  echo $messege; ?>
                                     <select class="form-control" name="option_id">
                  									  		<option value="..">..</option>
                                            <?php 
                                    $vsc1= new vsc_pdo("localhost,root,,travel");
                                    $select="SELECT `option_id`, `option_name`, `option_description`, `price_id`, `tour_id`, `taxonomy_id` FROM `option_tour` ";             
                                        $row=$vsc1->fetch_all($select);
                                            foreach ($row as $value) {
                                          echo"<option value='$value[option_id]'>$value[option_name]</option>";
                                                     }     
                                             ?>
                  									</select>
                                     <script type="text/javascript">
                                       for (var i = 0; i <add_detail.option_id.length ; i++) {
                                              if(add_detail.option_id[i].value=="<?php echo $_POST['option_id'] ?>"){
                                                add_detail.option_id[i].selected=true;
                                              }
                                            }
                                     </script>
                                  </div>
                                  <div class="form-group">
                                    <label>Services-Name</label>
                                     <?php if(isset($messege1)) echo $messege1; ?>
                                    	<select class="form-control" name="service_id">
                									  		<option value="..">..</option>
                									  		<?php 

                                        $selec_ser="SELECT `service_id`, `service_name`, `taxonomy_id` FROM `service_travel` "; 
                                            $row1=$vsc1->fetch_all($selec_ser);
                                             foreach ($row1 as $value) {
                                              echo "<option value='$value[service_id]'> $value[service_name]</option>";
                                             }
                                         ?>
								                    	</select>
                                       <script type="text/javascript">
                                             for (var i = 0; i <add_detail.service_id.length ; i++) {
                                              if(add_detail.service_id[i].value=="<?php echo $_POST['service_id'] ?>"){
                                                add_detail.service_id[i].selected=true;
                                              }
                                            }

                                       </script>
                                  </div>

                                   <div class="form-group">
                                    <label >Services-Titles</label>
                                    <?php if(isset($messege2)) echo $messege2; ?>
                                    <textarea type="text" class="form-control" name="txtser" placeholder="Service-title">
                                    <?php if(isset($_POST['txtser'])) echo htmlentities($_POST['txtser'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                  </div>
                                  <script type="text/javascript"> CKEDITOR.replace("txtser");</script>



                                   <div class="form-group">
                                    <label >Services-Itinerary</label>
                                     <?php if(isset($messege3)) echo $messege3;?>
                                     <textarea  type="text" class="form-control" name="Services-Itinerary" placeholder="Services-Itinerary">
                                       <?php if(isset($_POST['Services-Itinerary'])) echo htmlentities($_POST['Services-Itinerary'],ENT_COMPAT,'UTF-8'); ?>
                                     </textarea>
                                  </div>
                                    <script type="text/javascript"> CKEDITOR.replace("Services-Itinerary")</script>


                                          <div class="form-group">
                                            <label >Service_hightligh</label>
                                            <textarea type="text" class="form-control" name="txthight" placeholder="Services-Hightlight">
                                            <?php if(isset($_POST['txthight'])) echo htmlentities($_POST['txthight'],ENT_COMPAT,'UTF-8'); ?>
                                            </textarea>
                                          </div>
                                             <script type="text/javascript"> CKEDITOR.replace("txthight")</script>


                                   <div class="form-group">
                                    <label >Services-About</label>
                                    <textarea type="text" class="form-control" name="ser-about" placeholder="Services-About">
                                    <?php if(isset($_POST['ser-about'])) echo htmlentities($_POST['ser-about'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                  </div>
                                    <script type="text/javascript"> CKEDITOR.replace("ser-about")</script>


                                   <div class="form-group">
                                    <label >Services-Departure</label>
                                    <textarea type="text" class="form-control" name="ser-depart" placeholder="Services-Departure"> 
                                   <?php if(isset($_POST['ser-depart'])) echo htmlentities($_POST['ser-depart'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                  </div>
                                    <script type="text/javascript"> CKEDITOR.replace("ser-depart");</script>


                                   <div class="form-group">
                                    <label >Services-Note</label>
                                    <textarea type="text" class="form-control" name="ser-note" placeholder="Services-Note"> 
                                    <?php if(isset($_POST['ser-note'])) echo htmlentities($_POST['ser-note'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                  </div>
                                    <script type="text/javascript">   CKEDITOR.replace("ser-note")</script>


                                   <div class="form-group">
                                    <label >Services-Include</label>
                                    <textarea type="text" class="form-control" name="Ser-include" placeholder="Services-Include">
                                     <?php if(isset($_POST['Ser-include'])) echo htmlentities($_POST['Ser-include'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea> 
                                  </div>
                                <script type="text/javascript"> CKEDITOR.replace("Ser-include")</script>

                                  	<div class="form-group">
                                    <label >Services-Unclude</label>
                                    <textarea type="text" class="form-control" name="Ser-Unclude" placeholder="Services-Unclude">
                                     <?php if(isset($_POST['Ser-Unclude'])) echo htmlentities($_POST['Ser-Unclude'],ENT_COMPAT,'UTF-8'); ?>
                                    </textarea>
                                  </div>
                                  <script type="text/javascript"> CKEDITOR.replace("Ser-Unclude")</script>


                                  <button type="submit" name="ok" class="btn btn-default">Submit</button>
                    </form>
         		 </div>
 </section>	