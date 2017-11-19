    <?php 
    require("../includes/VSCPDO.php");
    require("../includes/class.php");
      require("../includes/function.php");
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?> 
 <!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8">
         		<h2 class="title_content_admin">View Conditions</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>Condition_Content</th>
		                            <th>Update</th>
		                            <th>Delete</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	 <?php 
 										 	// khoi tao bien vsc
		                    	          	 $vsc= new vsc_pdo("localhost,root,,travel");
		                    	           // select all condition in database 
		                    	         	 $select_cod="select * from conditions";
		                    	         	 $row= $vsc->fetch_all($select_cod);
		                    	         	  		$stt=1;
		                    	         	  foreach ($row as $value) {
		                    	         	  	 echo "<tr>";
		                    	         	  	  echo "<td>".$stt++." </td>";
		                    	         	  	 	echo "<td> $value[condition_content]</td>";
		                    	         	  	 	 echo "<td><a href='edit-conditions.php?id=$value[condition_id]'>Update</a></td></td>";
                            					echo"<td><a href='dell-conditons.php?id=$value[condition_id]' onclick='return show_confirm();'>Delete</a></td>";
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