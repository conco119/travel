<?php 
 		require("../includes/VSCPDO.php");
    	require("../includes/class.php");
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?> 
 <!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8">
         		<h2 class="title_content_admin">View Booking</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>Booking-address</th>
		                            <th>Departure</th>
		                            <th>Adult</th>
		                            <th>Child</th>
		                            <th>Infants</th>
		                            <th>Request</th>
		                            <th>Condition_Id</th>
		                             <th>Update</th>
		                            <th>Delete</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                     <?php 
		                        $vsc= new vsc_pdo("localhost,root,,travel");
		                        $select=" select * from booking";
		                        $stt=1;
		                         $row=$vsc->fetch_all($select);
		                          foreach ($row as $value) {
		                          	echo "<tr>";
		                          		echo "<td>".$stt++."</td>";
		                      			echo "<td>$value[booking_address]</td>";
		                      			echo "<td>$value[departure]</td>";
		                      			echo "<td>$value[adult]</td>";
		                      			echo "<td>$value[child]</td>";
		                      			echo "<td>$value[infant]</td>";
		                      			echo "<td>$value[request]</td>";
		                      			echo "<td>$value[condition_id]</td>";
		                      			echo "<td><a href='edit_booking.php?id=$value[booking_id]'>Update</a></td>";
		                      			echo "<td><a href='del-booking.php?id=$value[booking_id]' onclick='return show_confirm();'>Delete</a> </td>";
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