<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP opdracht - vertaler</title>
</head>
<?php
	error_reporting(E_ERROR);

	if(isset($_POST["submit"])){
		$naam = $_POST["naam"];
		$land = $_POST["land"];}
	elseif(!isset($_POST["submit"])){
		$land = "";
	}
?>
<body>

	<form method="post" action="">
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
	
		if($land=='NL'){
			echo 'Goedemorgen '.$naam;
		}
		elseif($land=='DE'){
			echo 'Guten Morgen '.$naam;
		}
		elseif($land=='EN'){
			echo 'Good morning '.$naam;
		}
        elseif($land=='FR'){
			echo 'Bonjour '.$naam;
		}
        elseif($land=='SP'){
			echo 'Buen día '.$naam;
		}
        elseif($land=='IT'){
			echo 'Buongiorno '.$naam;
		}
	?>

</body>
</html>