<!DOCTYPE html>
<html>
<head>
	<title>iTourGuide | Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="js/custom.js"></script>
	
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="js/custom.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">	
		$(document).ready(function(){
		    $(".dropdown").hover(            
		        function() {
		            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
		            $(this).toggleClass('open');        
		        },
		        function() {
		            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
		            $(this).toggleClass('open');       
		        }
		    );
		});
	</script>
</head>

<body>

<div class="">
  <nav class="navbar navbar-inverse w3-animate-opacity">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url()?>" style="margin-top:10px">iTour Guide</a>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse ">
		<ul class="nav navbar-nav">
			<li class="dropdown mega-dropdown w3-bar-item" style="margin-top:10px">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bus"></i> Destinations <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu w3-padding-16" style="margin-top: -20px">					
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Dhaka</li>
							<?php foreach ($places as $p) {?>
								<?php if($p['continent'] == 'Dhaka') {?>								
									<li><a href="show/<?php echo $p['pid']?>"><?php echo $p['name']?></a></li>  
								<?php }?>                     
							<?php }?>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Chittagong</li>
							<?php foreach ($places as $p) {?>
								<?php if($p['continent'] == 'Chittagong') {?>								
									<li><a href="show/<?php echo $p['pid']?>"><?php echo $p['name']?></a></li>  
								<?php }?>                     
							<?php }?>					
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Sylhet</li>
                           <?php foreach ($places as $p) {?>
								<?php if($p['continent'] == 'Sylhet') {?>								
									<li><a href="show/<?php echo $p['pid']?>"><?php echo $p['name']?></a></li>  
								<?php }?>                     
							<?php }?>								                     
						</ul>
					</li>

					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Barisal</li>
                            <?php foreach ($places as $p) {?>
								<?php if($p['continent'] == 'Barisal') {?>								
									<li><a href="show/<?php echo $p['pid']?>"><?php echo $p['name']?></a></li>  
								<?php }?>                     
							<?php }?>						                     
						</ul>
					</li>

					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Mymensingh</li>
                           <?php foreach ($places as $p) {?>
								<?php if($p['continent'] == 'Mymensingh') {?>								
									<li><a href="show/<?php echo $p['pid']?>"><?php echo $p['name']?></a></li>  
								<?php }?>                     
							<?php }?>						                     
						</ul>
					</li>

					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Khulna</li>
                            <?php foreach ($places as $p) {?>
								<?php if($p['continent'] == 'Khulna') {?>								
									<li><a href="show/<?php echo $p['pid']?>"><?php echo $p['name']?></a></li>  
								<?php }?>                     
							<?php }?>							                     
						</ul>
					</li>

					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Rajshahi</li>
                           <?php foreach ($places as $p) {?>
								<?php if($p['continent'] == 'Rajshahi') {?>								
									<li><a href="show/<?php echo $p['pid']?>"><?php echo $p['name']?></a></li>  
								<?php }?>                     
							<?php }?>								                     
						</ul>
					</li>
				</ul>				
			</li>
           <!--  <li class="dropdown" style="margin-top:10px">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-binoculars"></i> Things to do <span class="caret"></span></a>				
				<ul class="dropdown-menu" style="margin-top: -15px;width: 300px">
					<li class="w3-row">
    					<ul id="activi">
							<a href="#" class=" w3-padding-16">Experience Village Life</a><hr>			
							<a href="#" class="w3-hover-light-grey w3-padding">Adventure in Hill Tract</a>	<br>					
							<a href="#" class="w3-hover-light-grey w3-padding">Beach Holiday</a><br>						
							<a href="#" class="w3-hover-light-grey w3-padding">Fishing with Otters</a>	<br>					
							<a href="#" class="w3-hover-light-grey w3-padding">Bird Watching</a>	<br>					
						</ul>
					</li>					             
				</ul>				
			</li>         
 -->
			<li >
         	  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small w3-hover-black " onclick="document.getElementById('hotelReg').style.display='block'" style="height:75px;padding-top:25px;"><i class="fa fa-bank"></i> Own a Hotel?</a>        
        	</li>      
      		<li>
        		<a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small w3-hover-black" style="height:75px;padding-top:25px;" onclick="document.getElementById('travellerReg').style.display='block'"><i class="	fa fa-plane"></i> Adventure Seeker?</a>
        	</li>  
		</ul>       
	</div><!-- /.nav-collapse -->
  </nav>
</div>


	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0" style="margin-top: -25px">
	<div class="ws_images"><ul>
		<li><img src="data0/images/ee9529eddbc2cbb841871e3afd11576d.jpg" alt="ee9529eddbc2cbb841871e3afd11576d" title="Cox's Bazar" id="wows0_0"/></li>
		<li><img src="data0/images/maxresdefault.jpg" alt="maxresdefault" title="Bandorban" id="wows0_1"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data0/images/westernghats.jpg" alt="slider" title="Sylhet" id="wows0_2"/></a></li>
		<li><img src="data0/images/westernghats20160805232325.jpg" alt="western-ghats20160805232325" title="Khagrachori" id="wows0_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="ee9529eddbc2cbb841871e3afd11576d"><span><img src="data0/tooltips/ee9529eddbc2cbb841871e3afd11576d.jpg" alt="ee9529eddbc2cbb841871e3afd11576d"/>1</span></a>
		<a href="#" title="maxresdefault"><span><img src="data0/tooltips/maxresdefault.jpg" alt="maxresdefault"/>2</span></a>
		<a href="#" title="western-ghats"><span><img src="data0/tooltips/westernghats.jpg" alt="western-ghats"/>3</span></a>
		<a href="#" title="western-ghats20160805232325"><span><img src="data0/tooltips/westernghats20160805232325.jpg" alt="western-ghats20160805232325"/>4</span></a>
	</div></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	<!-- Navbar (sit on top) -->

	  <!-- Navbar on small screens -->
	 <!--  <div id="navSmall" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium ">
	    <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
	    <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="toggleFunction()">Food Lover?</a>
	    <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="toggleFunction()"> Own a Restaurent?</a>    	   
	  </div> -->
	</div>
	
	 <!-- The Traveller login -->
 	 <div id="travellerLogin" class="w3-modal" style="z-index: 10000">
	 	 <div class="w3-modal-content  w3-round-xxlarge" style="width: 550px">
	      <header class="w3-container w3-teal"> 
	        <span onclick="document.getElementById('travellerLogin').style.display='none'" 
	        class="w3-button w3-display-topright">&times;</span>
	        <h2 class="w3-center">Traveller Login</h2>
	      </header>
	      <div class="w3-container w3-padding-32 w3-center ">
	       	<form action="tralogin" method="post"> 	       
	       		<input type="text" name="username" placeholder="Ener username ..." class="w3-input w3-border">
	       		<br>
	       		<input type="password" name="password" placeholder="Ener password ..." class="w3-input w3-border">
	       		<br>
	       		<button class="w3-btn w3-green w3-round-large">Login</button>
	       	</form>
	      </div>	
	      <footer class="w3-container w3-teal w3-center w3-padding-16">	        
	      </footer>     
    	</div>
 	 </div> 	 
	 <!-- The Traveller login ends -->

	 <!-- The Hotel login -->
 	 <div id="hotelLogin" class="w3-modal" style="z-index: 10000">
	 	 <div class="w3-modal-content  w3-round-xxlarge" style="width: 550px">
	      <header class="w3-container w3-teal"> 
	        <span onclick="document.getElementById('hotelLogin').style.display='none'" 
	        class="w3-button w3-display-topright">&times;</span>
	        <h2 class="w3-center">Hotel Login</h2>
	      </header>
	      <div class="w3-container w3-padding-32 w3-center ">
	       	<form action="hotlogin" method="post"> 	       
	       		<input type="text" name="username" placeholder="Ener username ..." class="w3-input w3-border">
	       		<br>
	       		<input type="password" name="password" placeholder="Ener password ..." class="w3-input w3-border">
	       		<br>
	       		<button class="w3-btn w3-green w3-round-large">Login</button>
	       	</form>
	      </div>	
	      <footer class="w3-container w3-teal w3-center w3-padding-16">	        
	      </footer>     
    	</div>
 	 </div> 	 
	 <!-- The Hotel login ends -->


	 <!-- The Traveller Signup -->
 	 <div id="travellerReg" class="w3-modal" style="z-index: 10000">
	 	 <div class="w3-modal-content  w3-round-xxlarge" style="width: 550px">
	      <header class="w3-container w3-teal"> 
	        <span onclick="document.getElementById('travellerReg').style.display='none'" 
	        class="w3-button w3-display-topright">&times;</span>
	        <h2 class="w3-center">Join to Discover</h2>
	      </header>
	      <div class="w3-container w3-padding-32 w3-center ">
	       	<form action="trareg" method="post"> 	       
	       		<div class="w3-row-padding">
	       			<div class="w3-half">
	       				<input type="text" name="fname" placeholder="Enter First Name ..." class="w3-input w3-border">	       		
	       			</div>
	       			<div class="w3-half">
	       				<input type="text" name="lname" placeholder="Enter Last Name ..." class="w3-input w3-border">
	       			</div>	       			
	       		</div>	       		
	       		<br>
	       		<div class="w3-padding">	       			
		       		<input type="text" name="username" placeholder="Choose a username ..." class="w3-input w3-border">
		       		<br>
		       		<input type="password" name="password" placeholder="Choose a  password ..." class="w3-input w3-border">
		       		<br>
		       		<input type="password" placeholder="Confirm password ..." class="w3-input w3-border">
		       		<br>
		       		<input type="email" name="email" placeholder="Enter a Valid Email ..." class="w3-input w3-border">
		       		<br>
		       		<select class="w3-select w3-border" name="country">
		       			<option selected>Your District</option>
		       			<option value="Dhaka">Dhaka</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Savar">Savar</option>
		       		</select>
	       		</div>	       		
	       		<button class="w3-btn w3-green w3-round-large">JOIN</button>
	       	</form>
	      </div>	
	      <footer class="w3-container w3-teal  w3-center w3-padding-16">	 
	      		<a href="#" onclick="showAndHide('travellerLogin', 'travellerReg')" class="w3-text-white"  style="text-decoration: none">Already have a account?</a>
	        	<br>  
	      </footer>     
    	</div>
 	 </div> 	 
	 <!-- The Traveller Signup ends -->

 	 <!-- The Hotel Signup -->
 	 <div id="hotelReg" class="w3-modal" style="z-index: 10000">
	 	 <div class="w3-modal-content  w3-round-xxlarge" style="width: 550px">
	      <header class="w3-container w3-teal"> 
	        <span onclick="document.getElementById('hotelReg').style.display='none'" 
	        class="w3-button w3-display-topright">&times;</span>
	        <h2 class="w3-center">Join to Exapand</h2>
	      </header>
	      <div class="w3-container w3-padding-32 w3-center ">
	       	<form action="hotelreg" method="post"> 	              			       		
	       		<div class="w3-padding">	       			
		       		<input type="text" name="name" placeholder="Enter your hotel name ..." class="w3-input w3-border">
		       		<br>
		       		<input type="text" name="username" placeholder="Choose a username ..." class="w3-input w3-border">
		       		<br>
		       		<input type="password" name="password" placeholder="Choose a  password ..." class="w3-input w3-border">
		       		<br>
		       		<input type="password" name="password" placeholder="Confirm password ..." class="w3-input w3-border">
		       		<br>
		       		<input type="email" name="email" placeholder="Enter a Valid Email ..." class="w3-input w3-border">
		       		<br>
		       		<select class="w3-select w3-border" name='catagory'>
		       			<option selected>Choose a Catagory</option>
		       			<option value="High">High</option>
		       			<option value="Medium">Medium</option>
		       			<option value="Low">Low</option>		       		
		       		</select>
		       		<br>
		       		<br>
		       		<select class="w3-select w3-border" name="country">
		       			<option selected>Choose your District</option>
		       			<option value="Dhaka">Dhaka</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Savar">Savar</option>
		       		</select>
		       		<br>
		       		<br>
		       		<select class="w3-select w3-border" name='continent'>
		       			<option selected>Choose Division</option>
		       			<option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Mymensingh">Mymensingh</option>       			
		       		</select>
	       		</div>	       		
	       		<button class="w3-btn w3-green w3-round-large">JOIN</button>
	       	</form>
	      </div>	
	      <footer class="w3-container w3-teal w3-center w3-padding-16">	  
	      		<a href="#" onclick="showAndHide('hotelLogin', 'hotelReg')" class="w3-text-white"  style="text-decoration: none">Already have a account?</a>
	        	<br>      
	      </footer>     
    	</div>
 	 </div>
 	  <!-- The Hotel Signup ends-->
 	  <br>
 	  <br>
 	  <div class="w3-row w3-center w3-padding-16">
 	  	
 	  	<div style="width: 1000px; margin: 0px auto">
 	  		<h2 class="w3-center w3-text-green" style="width:250px;margin: 0px auto"><i class="fa fa-map-marker"></i> HILL TRACKS</h2>
 	  		<br><br>
 	  		<p style="text-align: justify;" class="w3-large">The culture of Bangladesh refers to the way of life of the people of Bangladesh. The land, the rivers, and the lives of the Bengali people formed a rich heritage with marked differences from neighbouring regions. It has evolved over the centuries and encompasses the cultural diversity of several social groups of Bangladesh.</p>
 	  		<img src="img/24.jpg" style="min-width: 90%" class="w3-margin-top w3-margin-bottom w3-card-4 w3-border w3-border-black">
 	  		<p style="text-align: justify;" class="w3-large"> 	  			 	  			
				Bangladesh is blessed with deep, rich and fertile soil, a gift from the three major rivers that form the deltaic plain upon which it sits. The Ganges, Brahmaputra and Meghna Rivers all wend their way down from the Himalayas, carrying nutrients to replenish Bangladesh’s fields. It has evolved over the centuries and encompasses the cultural diversity of several social groups of Bangladesh.
 	  		</p>
 	  	</div>
 	  
 	  
 	  </div>







	<!-- chatbot starts -->
	<div id="chatBot" class="w3-light-grey">
	     <div class="w3-row w3-teal w3-padding ">
	     	<p class="w3-margin-left w3-inline"> <i class="fa fa-blind"> Need Help? Ask Me !</i></p>
	     	<a href="javascript:void(0)" onclick="minimizeBot()" class="w3-right"><i class="w3-text-white fa fa-expand" id="botIcon"></i></a>
	     </div>

	     <div class="w3-row w3-border w3-padding" style="height: 350px">
	     	<div class="w3-padding w3-white" style="height: 300px;overflow-y:auto;" id="con">
	     		<p><span class="w3-amber w3-round-xxlarge w3-padding" > Hello! How Can I Help You?</span></p><br>
	     		<!-- <p style="text-align: right;"><span class="w3-blue w3-round-xxlarge w3-padding" id="showusertext"></p><br>	     		    	 -->
	     	</div>
	     </div>

	     <div class="w3-row w3-border" style="margin-top:-25px">	     	
	     	<input type="text" name="usertext" id='usertext' placeholder="How can I help?" class="w3-input w3-border">	     	  			     	
	     </div>
	 </div>
	 <!-- chatbot starts -->
	<script type="text/javascript">
		var wage = document.getElementById("usertext");
		wage.addEventListener("keydown", function (e) {
		    if (e.keyCode === 13) {
		        validate(e);
		    }
		});

		function validate(e) {
			var con= document.getElementById('con');
			var p = document.createElement("P");
			p.className = " w3-blue w3-round-xxlarge w3-padding";
			p.style.textAlign="right";
			p.style.width = "200px";
			p.style.float = "right";
			var t = document.createTextNode(wage.value);
			p.appendChild(t);
			con.appendChild(p);		

			if(wage.value == "I need some information about hotels in Cox's Bazar"){
				var t1 = document.createTextNode("Go ahead. Ask");
			}
			if(wage.value == "Cost of medium level hotels in Cox's Bazar"){
				var t1 = document.createTextNode("On Season or Off Season?");
			}
			if(wage.value == "On Season"){
				var t1 = document.createTextNode("5000 BDT");
			}  

			if(wage.value == "Off Season"){
				var t1 = document.createTextNode("2000 BDT");
			}

			if(wage.value == "Thanks"){
				var t1 = document.createTextNode("My pleasure! Sir");
			}  
		    var p1 = document.createElement("P");
			p1.className = " w3-amber w3-round-xxlarge w3-padding";
			p1.style.textAlign="left";
			p1.style.width = "200px";
			p1.style.float = "left";		
			p1.appendChild(t1);
			con.appendChild(p1);		
		    wage.value = '';
		}
	</script>
<footer class="w3-row w3-black" style="height: 100px">
	<br>
	<br>
	<p class="w3-center">All rights reserved &copy iToureGuide. 2017-2018</p>
</footer>
   	
</body>
</html>