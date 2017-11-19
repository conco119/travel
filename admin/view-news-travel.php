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
         		<h2 class="title_content_admin">View News Travel</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>ID</th>
		                            <th>Title</th>
		                            <th>Description</th>
		                            <th>Content</th>
		                            <th>Post date</th>
		                            <th>Taxonomy</th>
		                            <th>Update</th>
 									<th>Delete</th>
													
		                        </tr>
		                    </thead>
		                    
		                    	<?php 
		                    		//Khoi tao vsc_pdo
		                    		$vsc=new vsc_pdo("localhost,root,,travel");
		                    		
		                    		//select all news travel in database
		                    		$select_new="SELECT n.new_id,n.new_title,n.new_description,n.new_content,n.post_date,t.taxonomy_name";
		                    		$select_new.=" FROM news_travel as n ";
		                    		$select_new.=" INNER JOIN taxonomy as t USING(taxonomy_id)";
		                    		$select_new.=" ORDER BY new_id ASC";
		                    		
		                    		
		                    		$news=$vsc->fetch_all($select_new);
		                    		$stt=1;
		                    		foreach ($news as $val) {
		                    			
		   									echo "<tbody>
													<tr>
													<td>".$stt++."</td>
													<td>{$val['new_id']}</td>
													<td>{$val['new_title']}</td>
													<td>{$val['new_description']}</td>
													<td>".the_excerpt($val['new_content'])."<a>View More</a></td>
													<td>{$val['post_date']}</td>
													<td>".the_excerpt($val['taxonomy_name'])."</td>
													<td><a href='edit-news-travel.php?id={$val['new_id']}'>Update</a></td>
													<td><a href='del-news-travel.php?id={$val['new_id']}' onclick='show_confirm();' >Delete</a></td>
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