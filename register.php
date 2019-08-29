<?php
<<<<<<< HEAD
$password=$_POST['password'];
$hashPassword = sha1($password);

=======
$email=$_POST['email'];
$password=$_POST['password'];
>>>>>>> 6eda41484f865ac7bcaf8a192c31a543346e1ed0
$conn = mysqli_connect("localhost", "registerUser", "registerpwd", "budgetdb");

// sprawdzamy efekt połączenia
if (mysqli_connect_errno()) {
	printf("Nie udało się połączyć: %s", mysqli_connect_error());
	exit();
} else {
	echo "połączono z bazą". "<br>";
<<<<<<< HEAD
	$sql = "
		INSERT INTO TUsers 
 		VALUES ('', '" . $_POST['email'] . "', '$hashPassword')	";
=======
	$sql = "INSERT INTO TUsers 
 VALUES ('', '$email', '$password')";



>>>>>>> 6eda41484f865ac7bcaf8a192c31a543346e1ed0
	if (mysqli_query($conn, $sql)) {
		echo "Dodano rekord";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
// zamykamy połączenie z bazą
	mysqli_close($conn);
}
?> 