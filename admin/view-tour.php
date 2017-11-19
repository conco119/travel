<?php
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
		require("../includes/VSCPDO.php");
		$vsc = new vsc_pdo("localhost,root,,travel");
		$row = $vsc->fetch_all("select * from tour");

 ?>
 <!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         		<h2 class="title_content_admin">View Tour</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">

		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>Tour_id</th>
		                            <th>Tour_name</th>
		                            <th>Tour_description</th>
		                            <th>Taxonomy_id</th>
		                            
		                             <th>Update</th>
		                            <th>Deletes</th>
		                        </tr>
		                    </thead>

		                    <tbody>
													<?php
															foreach($row as $value){
													 ?>
													 <tr>
														<td><?php echo $value["tour_id"]; ?></td>
														<td><?php echo $value["tour_name"]; ?></td>
														<td><?php echo $value["tour_description"]; ?></td>
														<td><?php echo $value["taxonomy_id"]; ?></td>
													


															<form  action="update-tour.php" method="post">
																	<input type="hidden" name="tour_id" value="<?php echo $value["tour_id"]; ?>">
																	<td><button class="btn btn-primary" type="submit" name="sub-up">Update</button></td>
															</form>
														<form method="post" action="delete-tour.php">
															<input type="hidden" name="tour_id" value="<?php echo $value["tour_id"]; ?>">
															<td><button onclick="return confirm('are you sure?');" class="btn btn-danger" type="submit" name="sub-delete">Delete</button></td>
														</form>
													</tr>
													<?php } ?>
		                    </tbody>
		                </table>


		             </div>
		        </div>

  	  </section>
  	  <?php
      require("templates/footer-admin.php");
      ?>
		</body>
		</html>
