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
         		<h2 class="title_content_admin">View Nationality</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>Nationality ID</th>
		                            <th>Nationality </th>
		                            <th>Update</th>
 									<th>Delete</th>
													
		                        </tr>
		                    </thead>
		                    
		                    	<?php 
		                    		//Khoi tao vsc_pdo
		                    		$vsc=new vsc_pdo("localhost,root,,travel");
		                    		
		                    		//select all nationality in database
		                    		$select_nat="SELECT * FROM nationality";

		                    		$nat=$vsc->fetch_all($select_nat);
		                    		
		                    		foreach ($nat as $val) {
		                    			
		   									echo "<tbody>
													<tr>
													<td>{$val['nationality_id']}</td>
													<td>{$val['nationality_name']}</td>
													<td><a href='edit-nationality.php?id={$val['nationality_id']}'>Update</a></td>
													<td><a href='delete-nationality.php?id={$val['nationality_id']}' onclick='show_confirm();' >Delete</a></td>
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