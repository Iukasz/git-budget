<?php
$password=$_POST['password'];
$hashPassword = sha1($password);

$conn = mysqli_connect("localhost", "registerUser", "registerpwd", "budgetdb");

// sprawdzamy efekt połączenia
if (mysqli_connect_errno()) {
	printf("Nie udało się połączyć: %s", mysqli_connect_error());
	exit();
} else {
	echo "połączono z bazą". "<br>";
	$sql = "
		INSERT INTO TUsers 
 		VALUES ('', '" . $_POST['email'] . "', '$hashPassword')	";
	if (mysqli_query($conn, $sql)) {
		echo "Dodano rekord";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
// zamykamy połączenie z bazą
	mysqli_close($conn);
}
?> 