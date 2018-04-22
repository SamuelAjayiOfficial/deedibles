<?php
session_start();

if(!isset($_SESSION['id']))
{
	echo "You need to be logged in to view this page";
	exit;
}
else
{
	$vendorid = $_SESSION['id'];
	
	

	$conn = mysqli_connect("localhost","root","","vendordb");
	$query = "SELECT * FROM vendor_info WHERE id = '$vendorid'";

	if (!$conn) 
		{
			$databaseerror = "could not connect to database";
    		die("Connection failed: " . mysqli_connect_error($conn));
		}

		$result = mysqli_query($conn,$query);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$companyName = $row['company_name'];
		$phoneNo = $row['phone_number'];
		$description = $row['company_description'];
		$logo = $row['logo']; 

	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title></title>
    <meta charset="UTF-8">
  <?php
  include 'layouts/head.php';
  ?>
  </head>
  <body>
    <div class="mv-site">
      <?php
include 'layouts/header.php';
      ?>
	
<?php
include 'layouts/footer.php';
?>
</body>
</html>