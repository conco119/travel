 <!-- header -->
	<header class='container-fluid '>
		<!-- slider  -->
		<div id="slider" class="carousel slide" data-ride="carousel">
		 
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="images/img-slider.jpg" alt="slider" >
		      <div class="carousel-caption">
				 <h4 class='pull-left text-center'>ALISA CRUISE 2 DAYS/1 NIGHT  </h4>
				 <a type='submit' href='tour-detail.php' class="btn btn-primary pull-right">Learn more</a>
				<ul class='pull-right list-inline'>
					<li>Only From</li>
					<li class='price line-through'>$180</li>
					<li class='price sale'>$144</li>
					
				</ul>
				
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/img-slider1.jpg" alt="slider">
		      <div class="carousel-caption">
		        <h4 class='pull-left text-center'>ALISA CRUISE 2 DAYS/1 NIGHT  </h4>
		        <a type='submit' href='tour-detail.php' class="btn btn-primary pull-right">Learn more</a>
				<ul class='pull-right list-inline'>
					<li>Only From</li>
					<li class='price line-through'>$180</li>
					<li class='price sale'>$144</li>
					
				</ul>
				
		      </div>
		    </div>
		  	<div class="item">
		      <img src="images/img-slider2.jpg" alt="slider">
		      <div class="carousel-caption">
		         <h4 class='pull-left text-center'>ALISA CRUISE 2 DAYS/1 NIGHT  </h4>
		         <a type='submit' href='tour-detail.php' class="btn btn-primary pull-right">Learn more</a>
				<ul class='pull-right list-inline'>
					<li>Only From</li>
					<li class='price line-through'>$180</li>
					<li class='price sale'>$144</li>
					
				</ul>
				
		      </div>
		    </div>
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control  " href="#slider" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		  
		  
		</div><!-- end slider -->
		
		<div id='search-tabs' class='container-fluid'>
			<!-- New search tabs for desktop -->
			<ul class="nav nav-tabs " role="tablist" id='desktop-tabs'>
			  <li class="active"><a href="#search-tour" role="tab" data-toggle="tab">FIND THE BEST TOUR</a></li>
			  <li><a href="#search-service" role="tab" data-toggle="tab">SERVICE</a></li>
			  
			</ul>
			
			<!-- New search tabs for mobile -->
			<ul class="nav nav-pills nav-stacked " role="tablist" id='mobile-tabs'>
			  <li class="active text-center"><a href="#search-tour" role="tab" data-toggle="tab">FIND THE BEST TOUR</a></li>
			  <li class='text-center'><a href="#search-service" role="tab" data-toggle="tab">SERVICE</a></li>
			  
			</ul>
			<!--  Search Tab panes -->
			<div class="tab-content ">
				<!-- search tour -->
			  <div class="tab-pane active" id="search-tour">
			  	<form role='form' >
			  		<div class='form-group col-md-3 col-xs-6'>
			  			<p>WHERE</p>
			  			<small>Keyword</small>
			  			<input type='text' class='form-control input-sm' id='where' name='where'>
			  		</div>
			  		
			  		<div class='form-group col-xs-6 col-md-2'>
			  			<p>DESTINATION</p>
			  			<small>Destination</small>
			  			<select class='form-control' name='destination'>
			  			
			  			</select>
			  		</div>
			  		
			  		<div class='form-group col-xs-6 col-md-2'>
			  			<p>HOW LONG</p>
			  			<small>Keyword</small>
			  			<select class='form-control ' name='howlong'>
			  			
			  			</select>
			  		</div>
			  		
			  		<div class='form-group col-xs-6 col-md-3'>
			  			<p>HOW LONG</p>
			  			<small>Keyword</small>
			  			<select class='form-control ' name='howlong'>
			  			
			  			</select>
			  		</div>
			  		
			  	
			  			<button type='submit' class='btn btn-primary col-md-1 col-xs-12'>SEARCH</button>
			  		
			  		
			  	</form>
			  </div>
			  <div class="tab-pane" id="search-service">
			  
				  <form role='form' >
				  		
				  		<div class='form-group col-xs-12 col-md-3'>
				  			<p>SERVICE</p>
				  			<small>Keyword</small>
				  			<select class='form-control ' name='service'>
				  			
				  			</select>
				  		</div>
				  		
				  	
				  		<button type='submit' class='btn btn-primary col-md-1 col-xs-12'>SEARCH</button>
				  		
				  		
				  	</form>
			  </div>
			</div>
		</div>
		
	</header>