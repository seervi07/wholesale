<?php 
//include("newcustomer.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WholeSaler-Login</title>
<link rel="stylesheet" href="WholeSaler/styles.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<header>
				<h1><center><a href="#">Customer Info</a></center></h1>


			</header>
<body style="background-color:#42f4ce">
<section id="body1" class="width">
<fieldset><center>
					<!--YOU NEED TO WRITE AN ACTION HERE...-->
					<!--NEVER USE KEY WORDS AS THE VARIABLES AND NAMES... -->
					<legend><strong><h3>NEW CUSTOMER</h3></strong></legend>
					<form action="newcustomer.php" method="POST">
						<p><center><label for="name"><strong>Name:</strong></label>
						<input type="text" name="Cname" id="name"  placeholder = "Name" required/><b/></center></p>

						<p><center><label for="CustomerID">Customer-ID:</label>
						<input type="text" name="CustomerID" id="CustomerID" placeholder= "Login_ID" required/><br /></center></p>

						<p><center><label for="Phone">Phone-No:</label>
						<input type="text" name="Phone" id="Phone" placeholder="Phone-No"   required/><br /></center></p>

						<p><center><label for="password">Password:</label>
						<input type="password" name="Password" id="password" placeholder="**********" required/><br /></center></p>

						<p><center><label for="Address">Address:</label>
						<textarea cols="60" rows="8" name="Address" id="Address" placeholder="XYZ Area,Home town, street"required></textarea><br /></center></p>

						<p><center><input type="submit" name="Add" class="formbutton" value="Add Customer" /></center></p>
					</form>

		</center></fieldset>
		<footer class="clear">
				<p>&copy; WholeSale Business Managment by Sunil R and Vikas H K </p>
			</footer>

		</section>

</body>