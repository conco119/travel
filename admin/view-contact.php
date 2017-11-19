<?php
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
		require("../includes/VSCPDO.php");
		$vsc = new vsc_pdo("localhost,root,,travel");
		$row = $vsc->fetch_all("select * from contact");

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
		                            <th>Contact_id</th>
		                            <th>Contact-name</th>
		                            <th>Contact-email</th>
		                            <th>Contact-Phone</th>
		                            <th>Nationlity</th>
		                            <th>Contact-Infor</th>
		                            <th>Update</th>
		                            <th>Deletes</th>
		                        </tr>
		                    </thead>

		                    <tbody>
													<?php
															foreach($row as $value){
													 ?>
													 <tr>
														<td><?php echo $value["contact_id"]; ?></td>
														<td><?php echo $value["contact_name"]; ?></td>
														<td><?php echo $value["contact_email"]; ?></td>
														<td><?php echo $value["contact_phone"]; ?></td>
														<td><?php echo $value["nationality_id"]; ?></td>
														<td><?php echo $value["contact_info"]; ?></td>

															<form  action="update-contact.php" method="post">
																	<input type="hidden" name="contact_id" value="<?php echo $value["contact_id"]; ?>">
																	<td><button class="btn btn-primary" type="submit" name="sub-up">Update</button></td>
															</form>
														<form method="post" action="delete-contact.php">
															<input type="hidden" name="contact_id" value="<?php echo $value["contact_id"]; ?>">
															<td><button onclick="return show_confirm();" class="btn btn-danger" type="submit" name="sub-delete">Delete</button></td>
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
