<?php
$email=$_POST['email'];
$hashPassword = sha1($_POST['password']);
$conn = mysqli_connect("localhost", "registerUser", "registerpwd", "budgetdb");
// sprawdzamy efekt połączenia
if (mysqli_connect_errno()) {
    printf("Nie udało się połączyć: %s", mysqli_connect_error());
    exit();
}
else {

    echo "połączono z bazą". "<br>";


$sqlemail="SELECT email FROM TUsers WHERE email='$email'";
$resultmail = mysqli_query($conn, $sqlemail);

    if (mysqli_num_rows($resultmail) > 0) {
        // output data of each row
        while($rowMail = mysqli_fetch_assoc($resultmail)) {
            echo "email : " . $rowMail["email"] . "<br>";
            $dammMail=$rowMail["email"];

        }
    }

$sqlpassword="SELECT password FROM TUsers WHERE email='$email'";

$resultpass = mysqli_query($conn, $sqlpassword);
    if (mysqli_num_rows($resultpass) > 0) {
        // output data of each row
        while($rowPass = mysqli_fetch_assoc($resultpass)) {
            echo "pass : " . $rowPass["password"]. "<br>";
           $dammPassword=$rowPass["password"];
        }
    }

if($email==$dammMail && $hashPassword==$dammPassword){
    echo ("zalogowano");
}
else{
    echo ("błędny login lub hasło");

}
    mysqli_close($conn);
}


?>