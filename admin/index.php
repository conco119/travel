<?php 
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?> 
  	
  	<!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         		<h2 class="title_content_admin">View Contact</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>Tour_Id</th>
		                            <th></th>
		                            <th>Contact Email</th>
		                            <th>Content</th>
		                            <th>Delete</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                      
		                    </tbody>
		                </table>
		             </div>   
		        </div>

  	  </section> 
  	  <!--  	end section --> 
<?php 
require("templates/footer-admin.php");
 ?>