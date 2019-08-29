<?php
if (($_POST['email']) == null ) {
	echo "Nie podałeś danych";
}
else
	echo "Twoj email to ".$_POST['email'] ;
 
?> 