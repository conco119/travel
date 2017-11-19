 <?php 
		require("../includes/VSCPDO.php");
    	require("../includes/class.php");
    	require("../includes/function.php");
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?> 
 <!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8">
         		<h2 class="title_content_admin">View Detail Services</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                           
		                            
		                            <th>Ser-Title</th>
		                            <th>Ser-Itinerary</th>
		                            <th>Ser-Highligh</th>
		                            <th>Ser-About</th>
		                            <th>Ser-departure</th>
		                            <th>Ser-Note</th>
		                            <th>Update</th>
		                            <th>Delete</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                      		<?php 
		                      				$vsc= new vsc_pdo("localhost,root,,travel");
		                      				$select="select * from detail_service"; 
		                      				$stt=1;
		                      				 $row= $vsc->fetch_all($select);
		                      				  foreach ($row as $value) {
		                      				  		echo "<tr>"; 
		                      				  				echo "<td>".$stt++."</td>";
		                      				  				echo "<td>$value[service_title]</td>";
		                      				  				echo "<td>$value[service_itinerary]</td>";
		                      				  				echo "<td>$value[service_hightligh]</td>";
		                      				  				echo "<td>".the_excerpt($value['service_about'])."<a>View More</a></td>";
		                      				  				echo "<td>$value[service_departure]</td>";
		                      				  				echo "<td>$value[service_note]</td>";
		                      				  	echo "<td><a href='edit-detail-services.php?id=$value[detail_id]'>Update</a></td></td>";
                            					echo"<td><a href='del-detail-services.php?id=$value[detail_id]' onclick='return show_confirm();'>Delete</a></td>";
		                      				  		echo "</tr>";
		                      				  }
		                      		 ?>
		                    </tbody>
		                </table>
		             </div>   
		        </div>

  	  </section>
  	  <?php 
      require("templates/footer-admin.php");
      ?> 