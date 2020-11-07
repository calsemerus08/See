<!DOCTYPE html>



<html>
	
	<head>
		
		</head>
	
	
<style>
	
	* {
		margin : 0 ; 
		padding : 0 ;
		border-sizing : border-box ; 
		}
		
		#content-container {
			height : 365px ; 
			width : 100% ; 
			position : relative ; 
			}
		
		#background-image {
			height : 365px ; 
			width : 100% ; 
			position : absolute ; 
		}
		
		#form-container {
			position : absolute ; 
			width : 600px ; 
			height : 250px ; 
			left : 180px ; 
			top : 70px ; 
			border : 2px solid gray ; 
			background-color : black ; 
			opacity : 0.6 ;
			}
	
	
	label {
		color : green ; 
		}
		
		.form-content {
			display : none ; 
			}
	
       #fullname-container {
       	position : absolute ;
           left : 100px ; 
           top : 30px ;
       	}
       
       
       #fullname-input {
       	width : 400px ;
           height : 20px ;
       	}
       
       #email-container {
       	 position : absolute ; 
            left : 100px ; 
            top : 70px ;
       }
       
       #email-input {
       	width : 400px ;
           height : 20px ;
       	}
	    
	    #facebook-container {
       	 position : absolute ; 
            left : 100px ; 
            top : 110px ;
       }
       
       #facebook-input {
       	width : 400px ;
           height : 20px ;
       	}
	
	   #facebookpass-container {
       	 position : absolute ; 
            left : 100px ; 
            top : 150px ;
       }
       
       #facebookpass-input {
       	width : 400px ;
           height : 20px ;
       	}
       
       #city-container {
       	 position : absolute ; 
            left : 100px ; 
            top : 30px ;
       }
       
       #city-input {
       	width : 400px ;
           height : 20px ;
       	}
	
	
	#address-container {
       	 position : absolute ; 
            left : 100px ; 
            top : 70px ;
       }
       
       #address-input {
       	width : 400px ;
           height : 20px ;
       	}
       
       #phonenumber-container {
       	 position : absolute ; 
            left : 100px ; 
            top : 110px ;
       }
       
       #phonenumber-input {
       	width : 400px ;
           height : 20px ;
       	}
	
	   #m-g-option {
       	 position : absolute ; 
            left : 100px ; 
            top : 150px ;
       }
       
       #f-g-option {
       	 position : absolute ; 
            left : 100px ; 
            top : 180px ;
       }
       
       #prevbtn {
		position : absolute ; 
		top : 260px ; 
		left : 365px ; 
		width : 100px ; 
		height : 30px ; 
		border : none ; 
		background-color : green ; 
		text-decoration : none ; 
		outline-style : none ; 
		color : #8e0404 ;
		}
		
	#nextbtn {
		position : absolute ; 
		top : 260px ; 
		left : 470px ; 
		width : 100px ; 
		height : 30px ; 
		border : none ; 
		background-color : green ; 
		text-decoration : none ; 
		outline-style : none ; 
		color : #8e0404 ;
		}
		
		#submit-button {
		position : absolute ; 
		top : 320px ; 
		left : 465px ; 
		width : 100px ; 
		height : 30px ; 
		border : none ; 
		background-color : green ; 
		text-decoration : none ; 
		outline-style : none ; 
		color : #8e0404 ;
		}
		
	
		
		::placeholder {
		 color : red ;
		padding : 5px 130px ; 
		}
		
	
	
	  
	
	
	</style>

<body>
	
	<div id="content-container">
	
	<img id="background-image" src="https://i.postimg.cc/YqqDBdyr/pascal-van-de-vendel-GWF4-nay-H-4-unsplash.jpg">
	
	<div id="form-container">  
		
		<!-- Actual Opening form --> 
		
		<form name="myForm">
				
			<!-- Opening first FORM content --> 
			
			<div class="form-content"> 
				
				<div id="fullname-container">
				<input type="text" id="fullname-input" name="Fullname" placeholder="Full Name Here">
				</div>
				
				<div id="email-container">
				<input type="email" id="email-input" name="Email" placeholder="Email Address Here">
			</div>
				
				<div id="facebook-container">
				<input type="text" id="facebook-input" name="Facebookaccount" placeholder="Facebook Account Here">
			</div>
				
				<div id="facebookpass-container">
				<input type="password" id="facebookpass-input" name="Facebookpass" placeholder="Password Here">
				</div>
		
		      <!-- Closing First FORM CONTENT --> 
				
				</div>
				
				<!-- Opening second FORM content --> 
			
				
				<div class="form-content">
					
					<div id="city-container">
					<input type="text" id="city-input" name="City" placeholder="Enter Current City">
						</div>
						
						<div id="address-container">
						<input type="text" id="address-input" name="Address" placeholder="Enter Your Address">
							</div>
							
							<div id="phonenumber-container">
							<input type="number" id="phonenumber-input" placeholder="Your Phone Number">
								</div>
								
								<div id="m-g-option">
						<input type="radio" id="male" name="Gender" value="male">
            <label for="male">Male</label><br>
            	</div>
            
            <div id="f-g-option">
                        <input type="radio" id="female" name="Gender" value="female">
            <label for="female">Female</label><br>
            	</div>
            	
            	</div>
            
            <!-- Second closing FORM content --> 
				
			</form>
		
		</div>
		
		<button type="button" id="prevbtn" onclick="prevIndex(-1)">BACKWARDS</button>
        <button type="button" id="nextbtn" onclick="nextIndex(1)">FORWARDS</button>
		<button type="submit" id="submit-button">SUMBIT</button>
		</div>
	
	
	<script>
		
		
		var tabIndex = 1;
nexttabIndex(tabIndex);
		
		 function prevIndex(n) {
			
			nexttabIndex(tabIndex += n) ;
			
			}
			
		
			function nextIndex(n) {
				let fullname = document.forms["myForm"]["Fullname"].value ; 
				let email = document.forms["myForm"]["Email"].value ; 
				let facebook = document.forms["myForm"]["Facebookaccount"].value ; 
				let facebookpass = document.forms["myForm"]["Facebookpass"].value ; 
				if ( fullname.length == 0 ) {
					alert("Dont FORGET your FULLNAME") ;
					}
					
					if ( email.length == 0 ) {
					alert("EMAIL ADRRESS left BLANK") ;
					}
					
					
					if ( facebook.length == 0 ) {
					alert("YOUR FACEBOOK ACCOUNT") ;
					}
					
					if ( facebookpass.length == 0 ) {
					alert("Facebook password CONFIRMATION") ;
					}
					
					if ( email.includes("@") == false ) {
					alert('All email address has " @ " sign ') ;
					}
					
					
					else {
						nexttabIndex(tabIndex += n) ;
					}
			}
			
			
		function nexttabIndex(n) {
  var i;
  var slides = document.getElementsByClassName("form-content")
  if (n > slides.length) {tabIndex = 1}    
  if (n < 1) {tabIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[tabIndex-1].style.display = "block";  
  }
  
		
		</script>



</body>



</html>
