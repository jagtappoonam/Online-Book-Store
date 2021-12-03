<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">
								
Project aims to build an online bookstore website with effective customer profiling system. In this bookstore customer will be able to purchase books online that interested in customer profiling helps to understand and make suggestions to customer according to their mental and professional interests.</br> Our project basically consists of two parts where the first part is creating online bookstore and the second part is implementing customer profiling system to online bookstore. Our purpose is develop a such system that will help customers in choosing a book and making payment.</br> As all E-commerce websites this website need a cart system that will help to manage their purchase to satisfy all deliverables of customers. This website can be used for business purposes to sell a book via online.</br> Customer profiling need to interact with customer to get information about his/her preferences, habits and interests. Database will contain all information about book: author name, title, year, publisher, ISBN number, brief description of book and other attributes. There also will be database where will be all taken information about customer.<br/>
 
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
