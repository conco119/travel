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
         		<h2 class="title_content_admin">View Prices</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>ID</th>
		                            <th>Price Year</th>
		                            <th>Price From</th>
		                            <th>Price Promotion</th>
		                            <th>Single Supplement</th>
		                            <th>Valid From</th>
		                            <th>Valid To</th>
		                            <th>Min Quantity</th>
		                            <th>Max Quantity</th>
		                            <th>Taxonomy</th>
		                            <th>Update</th>
 									<th>Delete</th>
													
		                        </tr>
		                    </thead>
		                    
		                    	<?php 
		                    		//Khoi tao vsc_pdo
		                    		$vsc=new vsc_pdo("localhost,root,,travel");
		                    		
		                    		//select all price in database
		                    		$select_price="SELECT p.price_id,p.price_year,p.price_from,p.price_promotion,p.single_supplement,p.valid_from,p.valid_to,p.min_quantity,p.max_quantity,t.taxonomy_name";
		                    		$select_price.=" FROM price as p ";
		                    		$select_price.=" INNER JOIN taxonomy as t ON p.taxonomy_id=t.taxonomy_id ";
		                    		$select_price.=" ORDER BY p.price_id ASC";
		                    		
		                    		$prices=$vsc->fetch_all($select_price);
		                    	
		                    		$stt=1;
		                    		foreach ($prices as $val) {
		                    			
		   									echo "<tbody>
													<tr>
													<td>".$stt++."</td>
													<td>{$val['price_id']}</td>
													<td>{$val['price_year']}</td>
													<td>{$val['price_from']}</td>
													<td>{$val['price_promotion']}</td>
													<td>{$val['single_supplement']}</td>
													<td>{$val['valid_from']}</td>
													<td>{$val['valid_to']}</td>
													<td>{$val['min_quantity']}</td>
													<td>{$val['max_quantity']}</td>
													<td>{$val['taxonomy_name']}</td>
													<td><a href='edit-price.php?id={$val['price_id']}'>Update</a></td>
													<td><a href='del-price.php?id={$val['price_id']}' onclick='show_confirm();' >Delete</a></td>
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