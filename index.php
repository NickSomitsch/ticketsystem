<html>

<head>
	
	<title>
		Bundesliga 2020 Plätze sichern
	</title>
	
</head>

<body>
	
	<h1> Jetzt Tickets für die Saison 2020 sichern! </h1>
	<h3> Online bezahlen oder vor Ort </h3>
	
  <form action = "process.php" method = "post">
	<input type = "text" name = "vorname" placeholder = "Vorname" required> <br>
	<input type = "text" name = "nachname" placeholder = "Nachname" required> <br>
	<input type = "text" name = "straße" placeholder = "Straße" required>
	<input type = "number" name = "nr" placeholder = "Hausnummer" required> <br>
	<input type = "text" name = "plz" placeholder = "PLZ" required> <br>			
	<input type = "text" name = "ort" placeholder = "Wohnort" required> <br>	
	<input type = "text" name = "email" placeholder = "emailadresse" required> <br>		
	<input type = "number" name = "ticket_anzahl" placeholder = "Ticket Anzahl" required> <br>
	
    <input type = "hidden" name = "was" value = "plätze_buchen">
    <input type = "submit" name = "absenden" value = "Plätze Buchen">
  </form>	
  
</body>

</html>			