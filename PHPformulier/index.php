<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP opdracht - vertaler</title>
</head>
<?php
	error_reporting(E_ERROR);

	if(isset($_GET["submit"])){
		$naam = $_GET["naam"];
		$land = $_GET["land"];}
	elseif(!isset($_GET["submit"])){
		$land = "";
	}
?>
<body>

	<form method="get" action="">
	Naam: <input type="text" name="naam" placeholder="Uw naam" required /><br />
	Land:
	<select name="land" requierd>
        <option value="" <?php if (!isset($land)){echo "selected";}?>>Maak uw keuze</option>
		<option value="NL" <?php if ($land == 'NL'){echo "selected";}?>>Nederland</option>
		<option value="DE" <?php if ($land == 'DE'){echo "selected";}?>>Duitsland</option>
		<option value="EN" <?php if ($land == 'EN'){echo "selected";}?>>Engeland</option>
        <option value="FR" <?php if ($land == 'FR'){echo "selected";}?>>Frankrijk</option>
        <option value="SP" <?php if ($land == 'SP'){echo "selected";}?>>Spanje</option>
        <option value="IT" <?php if ($land == 'IT'){echo "selected";}?>>Italië</option>
	</select>
	<br />
	<input type="submit" name="submit" value="submit" />
	</form>

	<?php 
	
	switch ($land) {
		case "NL":
		  echo "Goedemorgen $naam";
		  break;
		case "DE":
		  echo "Guten morgen $naam";
		  break;
		case "EN":
		  echo "Good morning $naam";
		  break;
		case "FR":
			echo "Bonjour $naam";
			break;
		case "SP":
			echo "Buen día $naam";
			break;
		case "IT":
			echo "Buongiorno $naam";
			break;
	}
	?>

</body>
</html>