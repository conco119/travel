  <?php
  require("../includes/VSCPDO.php");
    require("../includes/class.php");
      require("../includes/function.php");
		require("templates/header-admin.php");
		require("templates/sidebar-admin.php");
 ?>

 <!--   start section -->
  	  <section>
  	  	<div id="content_admin" class="col-md-10 col-xs-8" style="border-bottom:2px solid #3b6c9e;">
         		<h2 class="title_content_admin">View Media Travel</h2>
  		</div>
		   <div id="content_admin2" class="col-md-10 col-xs-8" style="border:1px solid #3b6c9e;border-radius:5px; margin-top:5px; ">
		                  <div class="table-responsive">
		                <table class="table table-bordered warning">
		                    <thead>
		                        <tr>
		                            <th>STT</th>
		                            <th>Media-Name</th>
		                            <th>Media-Title</th>
		       						          <th>Media-Link</th>
		                            <th>Taxomomy</th>
		                            <th>Update</th>
		                            <th>Delete</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                       <?php
		                       		// khoi tao bien vsc
		                    	          	 $vsc= new vsc_pdo("localhost,root,,travel");
		                    	           // select all condition in database
		                    	         	 $select_cod="SELECT media_id, media_name, media_title, media_link, taxonomy_id FROM media_travel";
		                    	         	 $row= $vsc->fetch_all($select_cod);
		                    	         	  		$stt=1;
		                    	         	  foreach ($row as $value)
		                    	         	  	 {
		                    	         	  	 echo "<tr>";
		                    	         	  	  echo "<td>".$stt++." </td>";
		                    	         	  	 	echo "<td> $value[media_name]</td>";
		                    	         	  	 	echo "<td> $value[media_title]</td>";
		                    	         	  	 	echo "<td> $value[media_link]</td>";
		                    	         	  	 	echo "<td> $value[taxonomy_id]</td>";
		                    	         	  	 	 echo "<td><a href='edit-media-travel.php?id=$value[media_id]'>Update</a></td></td>";
                            					echo"<td><a href='del-media-travel.php?id=$value[media_id]' onclick='return show_confirm();'>Delete</a></td>";
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
