
<?php

$willen = "";
$opschieten = "";
$getal = "";
$vakantie = "";
$beste = "";
$slechtste = "";
$overkomen = "";
$resultaat = false;
$error = false; 



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $willen = $_POST["willen"];
      $opschieten = $_POST["opschieten"];
      $getal = $_POST["getal"];
      $vakantie = $_POST["vakantie"];
      $beste = $_POST["beste"];
      $slechtste = $_POST["slechtste"];
      $overkomen = $_POST["overkomen"];

	if ($willen == "" || $opschieten == "" || $getal == "" || $vakantie == "" || $beste == "" || $slechtste == "" || $overkomen == "") {
		$error = true; 
	}
    
    else {
    	$resultaat = true;
    	$willen = check($willen);
    	$opschieten = check($opschieten);
    	$getal = check($getal);
    	$vakantie = check($vakantie);
    	$beste = check($beste);
    	$slechtste = check($slechtste);
    	$overkomen = check($overkomen);
    	
        
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
		<li><a href="paniek.php">Er heeft paniek..</a></li>
		<li>Onkunde</li>


	</ul>
</nav>


<h1>Onkunde</h1>
<?php 


      if($error == true){
?>
      <p>Je moet alle velden invullen ! </p>

<?php 
      }
       
       if ($_SERVER['REQUEST_METHOD'] === 'GET' || $error == true) {


?>      	

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
	

    <label for="willen">Wat zou je graag willen kunnen ?</label>
    <input type="text" name="willen" id="willen"  value="<?php echo $willen; ?>">
    <br>

    <label for="opschieten">Met welke persoon kan je goed opschieten ?</label>
    <input type="text" name="opschieten" id="opschieten"  value="<?php echo $opschieten; ?>">
    <br>

    <label for="getal">Wat is je favoriete getal ?</label>
    <input type="text" name="getal" id="getal"  value="<?php echo $getal; ?>">
    <br>

    <label for="vakantie">Wat heb je altijd bij je als je op vakantie gat?</label>
    <input type="text" name="vakantie" id="vakantie"  value="<?php echo $vakantie; ?>">
    <br>

    <label for="beste">Wat is je beste persoonlijke eigenschap?</label>
    <input type="text" name="beste" id="beste"  value="<?php echo $beste; ?>">
    <br>

    <label for="slechtste">Wat is je slechtste persoonlijke eigenschap ? </label>
    <input type="text" name="slechtste" id="slechtste"  value="<?php echo $slechtste; ?>">
    <br>

	<label for="overkomen">Wat is het ergste dat je kan overkomen?</label>
    <input type="text" name="overkomen" id="overkomen"  value="<?php echo $overkomen; ?>">
    <br>
    
    <input type="submit" name="submit" id="submit">


</form>

<?php 
  

 		}
  		
  		else{  
 ?>
   		<p>Er zijn veel mensen die niet kunnen <?php echo $willen; ?>. Neem nou <?php echo $opschieten; ?>. zelfs met de hulp <br> van een <?php echo $vakantie; ?> of zelfs <?php echo $getal; ?> kan <?php echo $opschieten; ?>niet <?php echo $willen; ?> . Dat heeft niet te maken met <br> een gebrek aan <?php echo $beste; ?>, maar met een te veel aan <?php echo $slechtste; ?> <br> leidt tot <?php echo $overkomen; ?> en dat is niet goed als je wilt <?php echo $willen; ?> . Helaas voor <?php echo $opschieten; ?> </p>	
 <?php 
  			}
  ?>

<footer> abdulrahman aboudaoud 2021 </footer>	

</div>

	



</body>
</html>
























