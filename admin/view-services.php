<?php
require '../includes/class.php';
require '../includes/VSCPDO.php';
require '../includes/function.php';
require 'templates/header-admin.php';
require 'templates/sidebar-admin.php';
?>
 <!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8" >
         		<h2 class="title_content_admin">View Services</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>ID</th>
		                            <th>Name</th>
		                            <th>Taxonomy</th>
		                            <th>Update</th>
 									<th>Delete</th>
													
		                        </tr>
		                    </thead>
		                    
		                    	<?php 
		                    		//Khoi tao vsc_pdo
		                    		$vsc=new vsc_pdo("localhost,root,,travel");
		                    		
		                    		//select all news travel in database
		                    		$select_ser="SELECT s.service_id,s.service_name,t.taxonomy_name";
		                    		$select_ser.=" FROM service_travel as s ";
		                    		$select_ser.=" INNER JOIN taxonomy as t ON s.taxonomy_id=t.taxonomy_id";
		                    		$select_ser.=" ORDER BY service_id ASC";
		                    		
		                    		
		                    		$ser=$vsc->fetch_all($select_ser);
		                    	
		                    		$stt=1;
		                    		foreach ($ser as $val) {
		                    			
		   									echo "<tbody>
													<tr>
													<td>".$stt++."</td>
													<td>{$val['service_id']}</td>
													<td>{$val['service_name']}</td>
													<td>{$val['taxonomy_name']}</td>
													<td><a href='edit-service.php?id={$val['service_id']}'>Update</a></td>
													<td><a href='del-service.php?id={$val['service_id']}' onclick='show_confirm();' >Delete</a></td>
													</tr>
												</tbody>";
		   								
		                    		}
		                    		
		                    		
		                    	?>
		                    		
									
		                   
		                </table>
		             </div>   
		        </div>

  	  </section>
  	  <?php 
      require("templates/footer-admin.php");
      ?> 