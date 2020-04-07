
	<?php
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "skippy";
	
	
	//connect 
	$connection = new mysqli($host, $dbUsername, $dbPassword, $dbname); 

	//declaration	
	$subtract_quantity = $_POST['input_quantity'];
	$storage_code = $_POST['storage_code'];
	$shirt_size = $_POST['shirt_size'];
	/*
	$query = $connection->prepare("SELECT storage_code FROM storage WHERE storage_code = '$storage_code' "); 
	$query->execute(); 
	$result = $query->get_result();
	$r3 = $result->fetch_array(MYSQLI_ASSOC);
	$storage_code = $r3['storage_code'];*/
	if(($storage_code && $shirt_size)&& $shirt_size) //exception handling to check that there must be an input for all fields
	{ 	
		if ($shirt_size == 'Small')
		{
			$query = $connection->prepare("SELECT available_small FROM storage WHERE storage_code = '$storage_code' "); 
			$query->execute(); 
			$result = $query->get_result();
			$r4 = $result->fetch_array(MYSQLI_ASSOC);
			$available_small = $r4['available_small'];
			$stock_available = $available_small - $subtract_quantity;
			
			if($stock_available < 0)
			{
				$message = "Unable to update!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$myfile = fopen("admin_storage.php", "r") or die("Unable to open file!");
				echo fread($myfile,filesize("admin_storage.php"));
				fclose($myfile);
			}
			else
			{
				$UPDATE_stock_available = "UPDATE storage SET available_small = '$stock_available'  WHERE storage_code = '$storage_code' ";
				$stmt = $connection->prepare($UPDATE_stock_available);
				$stmt->execute();
				$stmt->close();
				
				//alert validation!
				$message = "Successfully Updated!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
				//open next file
				$myfile = fopen("admin_storage.php", "r") or die("Unable to open file!");
				echo fread($myfile,filesize("admin_storage.php"));
				fclose($myfile);
				$connection->close();
			}
		}
		
		if ($shirt_size == 'Medium')
		{
			$query = $connection->prepare("SELECT available_medium FROM storage WHERE storage_code = '$storage_code' "); 
			$query->execute(); 
			$result = $query->get_result();
			$r4 = $result->fetch_array(MYSQLI_ASSOC);
			$available_medium = $r4['available_medium'];
			$stock_available = $available_medium - $subtract_quantity;
			
			if($stock_available < 0)
			{
				$message = "Unable to update!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$myfile = fopen("admin_storage.php", "r") or die("Unable to open file!");
				echo fread($myfile,filesize("admin_storage.php"));
				fclose($myfile);
			}
			else
			{
				$UPDATE_stock_available = "UPDATE storage SET available_medium = '$stock_available'  WHERE storage_code = '$storage_code' ";
				$stmt = $connection->prepare($UPDATE_stock_available);
				$stmt->execute();
				$stmt->close();
				
				//alert validation!
				$message = "Successfully Updated!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
				//open next file
				$myfile = fopen("admin_storage.php", "r") or die("Unable to open file!");
				echo fread($myfile,filesize("admin_storage.php"));
				fclose($myfile);
				$connection->close();
			}
		}

		if ($shirt_size == 'Large')
		{
			$query = $connection->prepare("SELECT available_large FROM storage WHERE storage_code = '$storage_code' "); 
			$query->execute(); 
			$result = $query->get_result();
			$r4 = $result->fetch_array(MYSQLI_ASSOC);
			$available_large = $r4['available_large'];
			$stock_available = $available_large - $subtract_quantity;
			
			if($stock_available < 0)
			{
				$message = "Unable to update!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				$myfile = fopen("admin_storage.php", "r") or die("Unable to open file!");
				echo fread($myfile,filesize("admin_storage.php"));
				fclose($myfile);
			}
			else
			{
				$UPDATE_stock_available = "UPDATE storage SET available_large  = '$stock_available'  WHERE storage_code = '$storage_code' ";
				$stmt = $connection->prepare($UPDATE_stock_available);
				$stmt->execute();
				$stmt->close();
				
				//alert validation!
				$message = "Successfully Updated!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
				//open next file
				$myfile = fopen("admin_storage.php", "r") or die("Unable to open file!");
				echo fread($myfile,filesize("admin_storage.php"));
				fclose($myfile);
				$connection->close();
			}
		}	
	}
	else
	{
		$message = "All Fields Required!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		$myfile = fopen("admin_storage.php", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("admin_storage.php"));
		fclose($myfile);
	}
	
?>