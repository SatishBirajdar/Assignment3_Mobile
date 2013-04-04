<!--
Name : Satish Birajdar
File Name : securedpage.php
Description : A Mobile-Specific Web App for my portfolio site leveraging using
			  accumulated knowledge of PHP, JavaScript, JQuery Mobile and MySQL.
-->

<?php
 
session_start();
 
if (!isset($_SESSION['username'])) {
        header('http://localhost/Assignment3_mobile/index.php');
}
 
if (isset($_SESSION['connection'])) {
        header('http://localhost/Assignment3_mobile/Logout.php');
}

?>

<html>

	<head>
			<!-- Start jquery mobile HEAD section -->
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<meta name="apple-mobile-web-app-capable" content="yes" />
			<meta name="apple-mobile-web-app-status-bar-style" content="black" />
			
			<title>
				Secured page
			</title>
			
			<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />
			<link href='http://fonts.googleapis.com/css?family=Underdog' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
			<script src="http://code.jquery.com/jquery-1.7.2.min.js">
			</script>
			<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
			</script>
					   
	</head>

	<body>

			<div data-role="page" id="page1">

			<form method=POST action="Logout.php">
				<?php $s=$_SESSION['username']; ?>				<!--maintain Session between pages -->
				<div style "float: 'right'"><input type="submit" value="Logout" width=100px></div>
			</form>
			
			<div class="accountheader">
				<p>
					Hello ... <b><?php echo $_SESSION['username']; ?>,</b><br />
					you are inside your account. 
				</p>
			</div>
			
			<div class="securedpagehead">Your Contact Details:</div>		
			
			<div data-role="content">

				<ul data-role="listview" data-theme="d" data-inset="true">
					<?php
						try
						{
							include ("include/db.php");    //Database connection
							$result = mysql_query("SELECT * FROM contact_details ORDER BY Name ASC");  //Query for displaying Business contact details

							echo "<div data-role='collapsible-set'>";	//Collapsible display to show the contacts of Users
							while($row = mysql_fetch_array($result))
							{
								echo "<div data-role='collapsible'>"."<h3>"."<center>".$row[1]."</center>"."</h3>"."<div class='gcontent' > <strong>Contact Number: </strong><a href='wtai://wp/mc;".$row[2]."'>".$row[2]."</a><br /><strong>Address: </strong>".$row[3]."</div>"."</div>";
							}
							echo "</div>";
							mysql_close($connection);		//close Database connection							
						}
						catch(Exception $e)
						{
							echo $e->getMessage();
						}
					?>
				</ul>
			</div>
		</div>
	</body>

</html>




