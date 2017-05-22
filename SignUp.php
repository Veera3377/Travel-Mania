<html>
	<head>
		<meta charset="utf-8">
		<link href="style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
			function hideURLbar(){ window.scrollTo(0,1); }
		 </script>
		 <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css">
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<style>
			@import url(http://fonts.googleapis.com/css?family=Roboto);

			/****** LOGIN MODAL ******/
			.loginmodal-container {
			  padding: 30px;
			  max-width: 350px;
			  width: 100% !important;
			  background-color: #F7F7F7;
			  margin: 0 auto;
			  border-radius: 2px;
			  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			  overflow: hidden;
			  font-family: roboto;
			}

			.loginmodal-container h1 {
			  text-align: center;
			  font-size: 1.8em;
			  font-family: roboto;
			}

			.loginmodal-container input[type=submit] {
			  width: 100%;
			  display: block;
			  margin-bottom: 10px;
			  position: relative;
			}

			.loginmodal-container input[type=text], input[type=password] {
			  height: 44px;
			  font-size: 16px;
			  width: 100%;
			  margin-bottom: 10px;
			  -webkit-appearance: none;
			  background: #fff;
			  border: 1px solid #d9d9d9;
			  border-top: 1px solid #c0c0c0;
			  /* border-radius: 2px; */
			  padding: 0 8px;
			  box-sizing: border-box;
			  -moz-box-sizing: border-box;
			}

			.loginmodal-container input[type=text]:hover, input[type=password]:hover {
			  border: 1px solid #b9b9b9;
			  border-top: 1px solid #a0a0a0;
			  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			}

			.loginmodal {
			  text-align: center;
			  font-size: 14px;
			  font-family: 'Arial', sans-serif;
			  font-weight: 700;
			  height: 36px;
			  padding: 0 8px;
			/* border-radius: 3px; */
			/* -webkit-user-select: none;
			  user-select: none; */
			}

			.loginmodal-submit {
			  /* border: 1px solid #3079ed; */
			  border: 0px;
			  color: #fff;
			  text-shadow: 0 1px rgba(0,0,0,0.1); 
			  background-color: #4d90fe;
			  padding: 17px 0px;
			  font-family: roboto;
			  font-size: 14px;
			  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
			}

			.loginmodal-submit:hover {
			  /* border: 1px solid #2f5bb7; */
			  border: 0px;
			  text-shadow: 0 1px rgba(0,0,0,0.3);
			  background-color: #357ae8;
			  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
			}

			.loginmodal-container a {
			  text-decoration: none;
			  color: #666;
			  font-weight: 400;
			  text-align: center;
			  display: inline-block;
			  opacity: 0.6;
			  transition: opacity ease 0.5s;
			} 

			.login-help{
			  font-size: 12px;
			}
		</style>
        
	</head>
	<body>
	<div class="top-bar">
            <div class="top-bar-left">
                <ul class="menu">
                    <h2>
                        <li class="float-right"><a href="Index.php">TravelMania</a></li>
                    </h2>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="menu">
                    <li>
                        <input type="search" placeholder="Search">
                    </li>
                    <li>
                        <button type="button" class="button">Search</button>
                    </li>
                    <li>
                        <a href="Index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
    
	<div class="main">
			<center>

		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Enter your details to Register</h1><br>
				  <form method="post" action="registration.php">
					<input type="text" id="user" name="user" placeholder="Username">
					<input type="email" id="email" name="email" placeholder="Email ID">
					<input type="password" id="pass" name="pass" placeholder="Password">
					<input type="password" id="pass1" name="pass1" placeholder="Confirm Password">
					<input type="submit" name="register" class="login loginmodal-submit" value="Register">
				  </form>
					
				  <div class="login-help">
					<h3>Already have an account?</h3><a href="Login.php"><h3>Login</h3></a>  
				  </div>
				</div>
			</div>
		  </div>
			</center>
		</div>

	</body>
</html>