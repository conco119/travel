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
         		<h2 class="title_content_admin">View Menu Travel</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style=" margin-top:5px; ">
		                  <div class="table-responsive">    
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>Menu-Name</th>
		                            <th>Taxonomy-Name</th>
		                            <th>Update</th>
		                            <th>Delete</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                      <?php 
		                      		$vsc= new vsc_pdo("localhost,root,,travel");
		                      		//select all menu-travel in database
		                      		$sel="select * from menu_travel";
		                      		$row=$vsc->fetch_all($sel);
		                      		$stt=1; 
		                      		foreach ($row as $value) {
		                      		 echo "<tr>";
		                      		 	echo "<td>".$stt++."</td>";
		                      		 	echo "<td>$value[menu_name]</td>";
		                      		 	echo "<td>$value[taxonomy_id]</td>";
		                      		 	echo "<td><a href='edit-menu-travel.php?id=$value[menu_id]'>Update</a></td></td>";
                            			echo"<td><a href='del-menu-travel.php?id=$value[menu_id]' onclick='return show_confirm();'>Delete</a></td>";
		                      		echo"</tr>";
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