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
         		<h2 class="title_content_admin">View Options</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>ID</th>
		                            <th>Name</th>
		                            <th>Description</th>
		                            <th>Price From</th>
		                            <th>Tour</th>
		                            <th>Taxonomy</th>
		                            <th>Update</th>
 									<th>Delete</th>
													
		                        </tr>
		                    </thead>
		                    
		                    	<?php 
		                    		//Khoi tao vsc_pdo
		                    		$vsc=new vsc_pdo("localhost,root,,travel");
		                    		
		                    		//select all option in database
		                    		$select_option="SELECT o.option_id,o.option_name,o.option_description,p.price_from,tour.tour_name,t.taxonomy_name";
		                    		$select_option.=" FROM option_tour as o ";
		                    		$select_option.=" INNER JOIN price as p ON o.price_id=p.price_id";
		                    		$select_option.=" INNER JOIN tour ON o.tour_id=tour.tour_id";
		                    		$select_option.=" INNER JOIN taxonomy as t ON o.taxonomy_id=t.taxonomy_id";
		                    		$select_option.=" ORDER BY o.option_id ASC";
		                    		
		                    		
		                    		$options=$vsc->fetch_all($select_option);
		                    		$stt=1;
		                    		foreach ($options as $val) {
		                    			
		   									echo "<tbody>
													<tr>
													<td>".$stt++."</td>
													<td>{$val['option_id']}</td>
													<td>{$val['option_name']}</td>
													<td>{$val['option_description']}</td>
													<td>{$val['price_from']}</td>
													<td>{$val['tour_name']}</td>
													<td>{$val['taxonomy_name']}</td>
													<td><a href='edit-option.php?id={$val['option_id']}'>Update</a></td>
													<td><a href='del-option.php?id={$val['option_id']}' onclick='show_confirm();' >Delete</a></td>
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