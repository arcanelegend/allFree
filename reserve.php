<?php
	
	$firstname = filter_input(INPUT_POST, 'firstname');
	$lastname = filter_input(INPUT_POST, 'lastname');
	$email = filter_input(INPUT_POST, 'email');
	$dte = filter_input(INPUT_POST, 'dte');
	$flight = filter_input(INPUT_POST, 'flight');
	$country = filter_input(INPUT_POST, 'country');
	$destination = filter_input(INPUT_POST, 'destination');
	$fare = filter_input(INPUT_POST, 'fare');
	if (!empty($firstname)) {
	  if (!empty($lastname)) {
		if (!empty($email)) {
			if (!empty($dte)) {
				if (!empty($flight)) {
					if (!empty($country)) {
						if (!empty($destination)) {
							if (!empty($fare)) {
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "reserve";

	//Create connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	if (mysqli_connect_error()) {
		die('Connect Error ('.mysqli_connect_error().')'. mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO reservation (firstname, lastname, email, dte, flight, country, destination, fare)
		 values ('$firstname','$lastname','$email','$dte','$flight','$country','$destination','$fare')";
		if ($conn->query($sql)) {
			echo "New record is inserted successfully";
		}
		else{
			echo "Error: ".$sql ."<br>". $conn->error;
		}
		$conn->close();
	}
	}
	else{
		echo "Firstname should not be empty";
		die();
	}
		}
	else{
		echo "Lastname should not be empty";
		die();
	}
		}
	else{
		echo "Email should not be empty";
		die();
	}
		}
	else{
		echo "Date should not be empty";
		die();
	}
		}
	else{
		echo "Flight should not be empty";
		die();
	}
		}
	else{
		echo "Country should not be empty";
		die();
	}
		}
	else{
		echo "Destination should not be empty";
		die();
	}
        } 
	else{
	    echo "Fare should not be empty";
		die();
	}

?>