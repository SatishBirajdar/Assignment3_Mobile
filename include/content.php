<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
			Home
        </title>
		
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Underdog' rel='stylesheet' type='text/css'>
		
		<!-- Start Slider HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<script type="text/javascript" src="js/cpage.js"></script>
		<!-- End Slider HEAD section -->
		
		<!-- Start jquery mobile HEAD section -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet" href="my.css" />
        <script src="http://code.jquery.com/jquery-1.7.2.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>

       
    </head>
    <body>
        <!-- Home page -->
        <div data-role="page" id="page1">
            <div data-theme="d" data-role="header">
                <a href="Index.html">
                    <div class="logo">
                        <img src="images/logo.png" width="50" height="25" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -26px; margin-top: -14px" />
                    </div>
                </a>
                <h3>
                    Web Sailor
                </h3>
            </div>
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
					<ul>
                        <li>
                            <a href="#page1" data-transition="fade" data-theme="d" data-icon="home" class="ui-btn-active ui-state-persist">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#page2" data-transition="fade" data-theme="d" data-icon="info">
                                About Me
                            </a>
                        </li>
                        <li>
                            <a href="#page3" data-transition="fade" data-theme="d" data-icon="star">
                                Contact
                            </a>
                        </li>
						<li>
                            <a href="Login.php" data-transition="fade" data-theme="d" data-icon="grid">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
				<a href="#page4">
					<div class="pimage">
						<img src="images/projects.jpg"  width="130" height="80" alt="image"  />
					</div>
				</a>
				<a href="#page5">
					<div class="simage" >
						<img src="images/services.jpg"  width="130" height="80" alt="image"  />
					</div>
				</a>
            </div>    
			 
			<div class="mtitle">My Work:</div>
			<!-- Start Slider BODY section -->
			<div id="wowslider-container1" style ="width: 270px;height:215px">
				<div class="ws_images">
					<ul>
						<li>
							<a href="#page4"><img src="images/image_slider/android_apps2.jpg" alt="Android Apps" title="Android Apps" id="wows1_0"/></a>
						</li>
						<li>
							<a href="#page4"><img src="images/image_slider/android_games.jpg" alt="Android Games" title="Android Games" id="wows1_0"/></a>
						</li>
						<li>
							<a href="#page4"><img src="images/image_slider/vb_apps11.jpg" alt="VB Applications" title="VB Applications" id="wows1_0"/></a>
						</li>
					</ul>
				</div>
			<div class="ws_bullets"><div>
				<a href="images/image_slider/android_apps2.jpg" title="Android Apps">1</a>
				<a href="images/image_slider/android_games.jpg" title="Android Games">2</a>
				<a href="images/image_slider/vb_apps11.jpg" title="VB Applications">3</a>
			</div></div>
			
			<div class="ws_shadow"></div>
			</div>
			<script type="text/javascript" src="engine1/wowslider.js"></script>
			<script type="text/javascript" src="engine1/script.js"></script>
			
			
			<div data-role="button" >
			<a href="http://webdesign4.georgianc.on.ca/~200234918/AWP/Assignment1/Index.html" data-transition="fade" data-theme="d" data-icon="back">
                Site-View
            </a>
			</div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor					<!--footer-->
                </h4>
            </div>
        </div>
		
		<!--About Me Page-->
		
		<div data-role="page" id="page2">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page1" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
						<li>
                            <a href="#page2" data-transition="fade" data-theme="d" data-icon="info" class="ui-btn-active ui-state-persist">
                                About Me
                            </a>
                        </li>
                    </ul>
                </div>
                <div class = "mypic">
                    <img src="images/me.jpg" height= 230px width=150px alt="image"  />
                </div>
				
				
				<h3>Tagline:</h3>
				<div class="tagline">	
					Accessible Web Design, Rapid Application Development, Interactive Andriod Application, Collective Database Query... That's What I do...
				</div>
				
				<div class="mstatement">
					<h3>Mission Statement:</h3>
						My mission is to be the Best at identifying, quailifing & delivering software solutions & services that enhance my customer bottom line.
				</div>
				
                <a href="Document/SATISH_BIRAJDAR_CV.pdf" data-ajax="false">
					<div>
						<img style="width: 80px; height: 80px" src="images/cvbutton1.png" />
					</div>
                </a>
                               
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>
		
		
		
		
		<!-- Contact page-->
		
	    <div data-role="page" id="page3">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page1" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
						<li>
                            <a href="#page3" data-transition="fade" data-theme="d" data-icon="star" class="ui-btn-active ui-state-persist">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
				<div class="chead">
					<strong>BEST WAYS TO MAKE CONTACT :</strong>
				</div>
				
				<div class="ccontent">
					Email: satishbirajdar@hotmail.com</div>
					<div class="ccontent">satishbirajdar1@gmail.com</div>
					<div class="ccontent">Skype: satish.birajdar4</div>
					
					 
					
					<div class="ccontent">Mb. Number: <a href=”tel:7055002786>7055002786</a></div>
					<div class="chead">Timing:</div>
					<div class="ccontent">US Time: Monday to Saturday - 8 am to 11 pm </div>
					<div class="ccontent">Asian Time: Monday to Saturday - 6.30 pm to 9.30 am</div>
				
				
               			
				<a href="https://twitter.com/satish_birajdar">
                    <div style="width: 30px; height: 30px; position: relative; float:right; margin-top: 5%;">
                        <img src="images/twitter.png" height="30px" width="30px" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -15px" />
                    </div>
                </a>
				
				<a href="http://www.facebook.com/pages/Web-Sailor/105607992942862?skip_nax_wizard=true">
                    <div style="width: 30px; height: 30px; position: relative; float:right; margin-top: 5%;">
                        <img src="images/facebook.png" height="30px" width="30px" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -15px" />
                    </div>
                </a>
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>
		
	
		
		
		<!--Project page-->	
		
		
		<div data-role="page" id="page4">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page1" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
						<li>
                            <a href="#page4" data-transition="fade" data-theme="d" class="ui-btn-active ui-state-persist">  <!--image button-->
                                Projects
                            </a>
                        </li>
                    </ul>
                </div>
                
				<!--Collapsible Data content-->
				
                <div data-role="collapsible-set">
                    <div data-role="collapsible">
                        <h3>
                            Android Games
                        </h3>
						<p>
							<a href="https://github.com/SatishBirajdar/Android-Games.git"><img src="images/android_games.jpg" width="120" height="110" >&nbsp;<img src="images/android_apps1.jpg" width="120" height="110" ></a>
							<div class="gcontent">
								This is the latest development from Web Sailor. The application is the first stage of an arcade game on Android. 
								The user guides his avatar through a dangerous highway to collect foods/worms. He will unfortunately not be alone and the hunt will be quite dangerous (more development expected in part 2 of the game featuring eagles attacks (to be release in July 2013). 
								The game environment features trucks, cars that will make the hunt of the chicken difficult.
							</div>
						</p>
                    </div>
					<div data-role="collapsible">
                        <h3>
                            VB Apps
                        </h3>
						<p>
							<a href="https://github.com/SatishBirajdar/VisualBasic.git"><img src="images/VB_Apps.jpg" width="120" height="110" >&nbsp;<img src="images/VB_Apps1.jpg" width="120" height="110" ></a>
							<div class="gcontent">
							An application that stores Employee details including Name and Employee number in an Structure Array. 
							It can also show all the Employee details and calculate his weekly wage from the Input Form.
							</div>
						</p>
                    </div>
                    <div data-role="collapsible">
                        <h3>
                            Android Apps
                        </h3>
						<p>
							<a href="https://github.com/SatishBirajdar/Anroid-Apps.git"><img src="images/android_apps2.jpg" width="120" height="110" >&nbsp;<img src="images/android_app.jpg" width="120" height="110" ></a>
							<div class="gcontent">
							The following Android Application is designed for an Android cellphone that allows the user to enter and edit one or more Shopping Lists. 
							The App will include three screens or Activities:a Main Shopping List screen, an Add/Modify screen and a Shop screen. The Main Shopping List screen will display a list of Shopping Lists (if any). Each list will be clickable and a context menu will allow the user to Shop, Modify or Delete the list. The Add/Modify screen will allow the user to add new Shopping List items (and their desired quantities) or modify existing items. 
							The Shop screen will allow the user to check off items from the Shopping List.
							</div>
						</p>
                    </div>

                </div>
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>
		
		
		
		<!--Services page-->
		
		<div data-role="page" id="page5">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page1" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
						<li>
                            <a href="#page1" data-transition="fade" data-theme="d" class="ui-btn-active ui-state-persist">
                                Services
                            </a>
                        </li>
                    </ul>
                </div>
                
				<!--Listview Content-->
				
             <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        Services :
                    </li>
                    <li data-theme="c">
                        <a href="#page6" data-transition="slide">
                            Android Application Development
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#page7" data-transition="slide">
                            Rapid Application Development
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#page8" data-transition="slide">
                            Website Development
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#page9" data-transition="slide">
                            Database Query
                        </a>
                    </li>
                </ul>
			 
			</div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>
		
		
		
		<!--Android Application Development page-->
		
		<div data-role="page" id="page6">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page5" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
                    </ul>
                </div>
                
             
		<h3>Android Application Development</h3>
		<div class="gcontent">  <img src="images/Android-Application.jpg" height= 120px width= 130px   />&nbsp;<img src="images/android-games.jpg" height= 120px width= 130px  />
			<ul>
				<li>User-friendly GUI</li>
				<li>Optimised functionality</li>
				<li>Tested for all desired inputs</li>
				<li>Accurate Calculations</li>
				<li>Creative Games</li>
				<li>Innovative Games</li>
				<li>Puzzles Games</li>
				<li>Satisfaction of customers</li>
			</ul>
		</div>
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>
		
		<!--Rapid Application Development page-->
		
		<div data-role="page" id="page7">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page5" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
                    </ul>
                </div>
         		 
				<h3>Rapid Application Development</h3>
		
				<div class="gcontent">  <img src="images/VB_Apps.jpg" height= 120px width= 130px/>&nbsp;<img src="images/VB_Apps1.jpg" height= 120px width= 130px  />
				<ul>
					<li>User-friendly GUI</li>
					<li>Optimised functionality</li>
					<li>Accurate Calculations</li>
					<li>Satisfaction of customers</li>
				</ul>
				</div>
				 
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>
		
		
		<!--Website Development page-->
		
		<div data-role="page" id="page8">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page5" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
                    </ul>
                </div>
                
             		 
				<h3>Website Development</h3>
			
				<div class="gcontent">  <img src="images/website1.jpg" height= 120px width= 130px   /><img src="images/seo_image.jpg" height= 120px width= 130px  />
					<ul>
						<li>Optimised content</li>
						<li>Optimised functionality</li>
						<li>SEO for website charged extra</li>
						<li>Off-page and On-page linking charged Extra</li>
					</ul>
				</div>
             
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>
		
		<!--Database Query page-->
		
		<div data-role="page" id="page9">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page5" data-transition="fade" data-theme="d" data-icon="back">
                                Back
                            </a>
                        </li>
                    </ul>
                </div>
                      
				<h3>Database Query</h3>
				<div class="gcontent"> <img src="images/database.jpeg" height= 180px width= 230px   />
					<ul>
						<li>create a query required to have a desired result</li>
						<li>Optimised query</li>
						<li>Query with less stress</li>
						<li>Fast in Execution</li>
					</ul>
				</div>
             
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h4>
                    copyright @ Web Sailor
                </h4>
            </div>
        </div>		
		
		
		
	</body>
</html>