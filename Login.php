<!--
Name : Satish Birajdar
File Name : Login.php
Description : A Mobile-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, JavaScript, JQuery Mobile and MySQL.
-->


<?php
 
	if (isset($_SESSION['username'])) 
	{
			header('http://localhost/Assignment3_mobile/user/securedpage.php');		//maintaining session between pages
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
			Login
        </title>
        <link rel="stylesheet" href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <script src="https://s3.amazonaws.com/codiqa-cdn/jquery-1.7.2.min.js">
        </script>
        <script src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        
        
    </head>
    <body>
        <div data-role="page" id="page1">
			<div data-role="content">
				<div data-role="navbar" data-iconpos="top">
				
					<ul>
						<li>
							<a href="index.php" data-transition="fade" data-theme="d" data-icon="back">
								Back															<!--link to Back page -->
							</a>
						</li>
						<li>
                            <a href="#page10" data-transition="fade" data-theme="d" class="ui-btn-active ui-state-persist">  <!--link to Login page -->
                                Login
                            </a>
                        </li>
					</ul>
				</div>
				
				<form method="POST" action="loginproc.php">				<!--Login Form-->
				
					<div data-role="content" > <strong>Sign In:</strong></div>
					<div data-role="fieldcontain">
						<fieldset data-role="controlgroup">
							<input data-autosuggest-max-length="30" data-val="true" data-val-length-max="60" data-val-length-min="3" data-val-required="Username is required" id="username" name="username" placeholder="Username" type="text" value="" />
							<span data-valmsg-for="To" data-valmsg-replace="true"></span>
						</fieldset>
					</div>
					<div data-role="fieldcontain">
						<fieldset data-role="controlgroup">
							<input data-autosuggest-max-length="30" data-val="true" data-val-length-max="60" data-val-length-min="3" data-val-required="Password is required" id="password" name="password" placeholder="Password" type="password" value="" />
							<span data-valmsg-for="To" data-valmsg-replace="true"></span>
						</fieldset>
					</div>
					<input data-inline="true" data-theme="d"  type="submit" value="Login">		<!--submit button-->
					<input data-inline="true" data-theme="d"  type="reset" value="Reset">		<!--reset button-->
					
				</form>
			</div>
		</div>
    </body>
</html>
