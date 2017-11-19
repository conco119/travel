<?php
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
		require("../includes/VSCPDO.php");
		$vsc = new vsc_pdo("localhost,root,,travel");
		$row = $vsc->fetch_all("select * from users");

 ?>
 <!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         		<h2 class="title_content_admin">View Users</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">

		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>user_id</th>
		                            <th>user_name</th>
		                            <th>user_pass</th>
		                            <th>user_gender</th>
		                            <th>user_phone</th>
                                <th>user_email</th>
                                <th>level</th>
                                <th>nationality_id</th>
		                             <th>Update</th>
		                            <th>Deletes</th>
		                        </tr>
		                    </thead>

		                    <tbody>
													<?php
															foreach($row as $value){
													 ?>
													 <tr>
														<td><?php echo $value["user_id"]; ?></td>
														<td><?php echo $value["user_name"]; ?></td>
														<td><?php echo $value["user_pass"]; ?></td>
														<td><?php echo $value["user_gender"]; ?></td>
														<td><?php echo $value["user_phone"]; ?></td>
                            <td><?php echo $value["user_email"]; ?></td>
                            <td><?php echo $value["level"]; ?></td>
                            <td><?php echo $value["nationality_id"]; ?></td>



															<form  action="update-user.php" method="post">
																	<input type="hidden" name="user_id" value="<?php echo $value["user_id"]; ?>">
																	<td><button class="btn btn-primary" type="submit" name="sub-up">Update</button></td>
															</form>
														<form method="post" action="delete-user.php">
															<input type="hidden" name="user_id" value="<?php echo $value["user_id"]; ?>">
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
