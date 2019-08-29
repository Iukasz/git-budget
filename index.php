<?php
// nawiązujemy połączenie
$link = mysqli_connect("adresHosta", "uzytkownik", "haslo", "nazwaBazy");
 
// sprawdzamy efekt połączenia
if (mysqli_connect_errno()) {
  printf("Nie udało się połączyć: %s", mysqli_connect_error());
  exit();
}
 
// przeprowadzamy wszystkie operacje
 
// zamykamy połączenie z bazą
mysqli_close($link);
?>

<form method="POST" action="/register.php">
   <fieldset>
       <div class="form-group">
			<big> Rejestracja </big><br>
           <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
       </div>
       <div class="form-group">
           <input class="form-control" placeholder="Hasło" name="password" type="password" value="">
       </div>
       <div class="form-group">
           <input class="form-control" placeholder="Powtórz hasło" name="password2" type="password" value="">
       </div>
       <button type="submit" class="btn btn-lg btn-success btn-block">Załóż konto</button>
   </fieldset>
   
   
</form>
   
   
   <form method="POST" action="/login.php">
   <fieldset>
       <div class="form-group">
	   <big>Logowanie </big><br>
           <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
       </div>
       <div class="form-group">
           <input class="form-control" placeholder="Hasło" name="password" type="password" value="">
       </div>
       
       <button type="submit" class="btn btn-lg btn-success btn-block">Zaloguj</button>
   </fieldset>
</form>	
