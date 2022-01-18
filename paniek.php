
<?php


$huisdier = "";
$persoon = "";
$land = "";
$vervelen = "";
$docent = "";
$spelgoed = "";
$prijs = "";
$bezigheid = "";
$resultaat = false;
$error = false; 




if ($_SERVER['REQUEST_METHOD'] === 'POST'){

$huisdier = $_POST["huisdier"];
$persoon = $_POST["persoon"];
$land = $_POST["land"];
$vervelen = $_POST["vervelen"];
$docent = $_POST["docent"];
$spelgoed = $_POST["spelgoed"];
$prijs = $_POST["prijs"];
$bezigheid = $_POST["bezigheid"];




      if ($huisdier == "" || $persoon == "" || $land == "" || $vervelen == "" || $docent == "" || $spelgoed == "" || $prijs == "" || $bezigheid == "") {
            $error = true; 
      }
    
    else {
      $resultaat = true;
      $huisdier = check($huisdier);
      $persoon = check($persoon);
      $land = check($land);
      $vervelen = check($vervelen);
      $docent = check($docent);
      $spelgoed = check($spelgoed);
      $prijs = check($prijs);
      $bezigheid = check($bezigheid);
        
    }
}


 function check($data){
      $data = trim($data);
      $data = htmlspecialchars($data);
      return $data;
 }





?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mad Lips Opdracht</title>
	<link rel="stylesheet" type="text/css" href="madlips.css">
</head>
<body>


<header><img width="700px;" src="madlips.png"></header>
<div class="main">



<nav>
	<ul>
		<li>Er heeft paniek..</li>
		<li><a href="onkunde.php">Onkunde</a></li>


	</ul>
</nav>

<h1>Er heerst paniek ....</h1>
<?php 


      if($error == true){
?>
      <p>Je moet alle velden invullen ! </p>

<?php 
      }
       
      if ($_SERVER['REQUEST_METHOD'] === 'GET' || $error == true) {

?>      	

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
	

    <label for="animal">Welke dier zou je nooit als huisdier willen hebben ?</label>
    <input type="text" name="huisdier" id="animal"  value="<?php echo $huisdier; ?>">
    <br>

    <label for="person">Wie is de belangrijkste persoon in je leven ?</label>
    <input type="text" name="persoon" id="person"  value="<?php echo $persoon; ?>">
    <br>

    <label for="country">In welke land zou graag willen wonen ?</label>
    <input type="text" name="land" id="country"  value="<?php echo $land; ?>">
    <br>

    <label for="bore">Wat doe je als je verveelt?</label>
    <input type="text" name="vervelen" id="bore"  value="<?php echo $vervelen; ?>">
    <br>

    <label for="game">Met welk speelgoed speelde je als kind het meest?</label>
    <input type="text" name="spelgoed" id="game"  value="<?php echo $spelgoed; ?>">
    <br>

    <label for="teacher">Bij welke docent spijbel je het liefst ? </label>
    <input type="text" name="docent" id="teacher"  value="<?php echo $docent; ?>">
    <br>

	<label for="price">Als je 100.000$ had, wat zou je dan kopen ?</label>
    <input type="text" name="prijs" id="price"  value="<?php echo $prijs; ?>">
    <br>


	<label for="busy">Wat is je favoriete bezigheid ? </label>
    <input type="text" name="bezigheid" id="busy"  value="<?php echo $bezigheid; ?>">
    <br>

    <input type="submit" name="submit" id="submit">


    



</form>

<?php 
  

 		}
  		
  		else{  
 ?>
   		<p>Er heerst paniek in het koningrijk <?php echo $land; ?>. Koning <?php echo $docent; ?> is ten einde raad en als koning <?php echo $docent; ?> ten einde raad is, dan roept hij ten-einde-raadsheer <?php echo $persoon; ?>.<br> "<?php echo $persoon; ?>! Het is een ramp! Het is een schande!" <br> "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" <br> "Mijn <?php echo $huisdier; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $spelgoed; ?> voor hem gekocht!" <br> "Majesteit, uw <?php echo $huisdier; ?> komt vast vanzelf weer terug?" <br> "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid; ?> leren?" <br> "Maar Sire, daar kunt u toch uw <?php echo $prijs; ?> voor gebruiken." <br> "<?php echo $persoon; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." <br> "Mij <?php echo $vervelen; ?>, Sire" </p>	
 <?php 
  			}
  ?>

<footer> abdulrahman aboudaoud 2021 </footer>	

</div>

	



</body>
</html>



