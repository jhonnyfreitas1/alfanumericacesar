<?php 
 echo "<h1 style='background-color:blue;'>Sua palavra traduzida é <b style='color:white;'>↧ </b></h1>";

$alfabeto = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","y","z");


$novapalavra1 = $_GET['trans'];
$novapalavra1 = strtolower($novapalavra1);
	
	$novapalavra = str_split($novapalavra1);
	
echo "<h2>";
	if (isset($_GET['trans'])) {
		
    
	for($i=0; $i<sizeof($novapalavra); $i++){

	for ($j=0; $j < sizeof($alfabeto); $j++) { 
		
		if ($novapalavra[$i] == $alfabeto[$j]){

	if ($alfabeto[$j]=="a"){
			$velhapalavra[$i] = "w";
		}else if ($alfabeto[$j]=="b"){
			$velhapalavra[$i] = "y";
		}else if ($alfabeto[$j]=="c"){
			$velhapalavra[$i] = "z";
		}else {

		$velhapalavra[$i] = $alfabeto[$j-3];
}		echo "<b style=color:blue;>".$velhapalavra[$i]."</b>"; 
		$descrip =implode("",$velhapalavra);
}
}
}
}

echo "</h2>";
echo "</br>";



?>
<a href="crip.php"> Voltar </a>