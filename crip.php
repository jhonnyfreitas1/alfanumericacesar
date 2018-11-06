<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo "<h1 style='background-color:blue;'>Encripte uma palavra Abaixo <b style='color:white;'>↧</b></h1>"; ?>
<form action="crip.php" method="POST">
	<input type="text" name="palavra">
<input type="submit" name="enviar" value="Enviar">
</form>
<?php 
$palavra = $_POST['palavra'];
if (isset($palavra)) {
$palavra = strtolower($palavra);
echo "Palavra normal é<b style='color:blue;'> $palavra</b>	 </br>";
$alfabeto = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","y","z");
$velhapalavra = [];
$novapalavra = [];
$arr1 = str_split($palavra);
echo "Sua palavra incriptada é "; 
for ($i=0; $i <sizeof($arr1); $i++) { 
	
	for ($j=0; $j <sizeof($alfabeto); $j++) { 
		
	if ($palavra[$i] == $alfabeto[$j]){
		
		if ($alfabeto[$j-1]=="y"){
			$novapalavra[$i] = $alfabeto[2];
		}else if ($alfabeto[$j+1]=="z"){
			$novapalavra[$i] = $alfabeto[1];
		}else if ($alfabeto[$j+1]=="y"){
			$novapalavra[$i]= $alfabeto[0];
		}else {
		$novapalavra[$i]=$alfabeto[$j+3];
	
	
	}

	}
	
	}

echo "<b style='color:blue;'>".$novapalavra[$i]."</b>";	
$crip =implode("",$novapalavra);
	}
	echo "</br>";
	}
	 echo "<h1 style='background-color:blue;'>Traduza uma palavra Abaixo <b style='color:red;'>↧</b></h1> ";
	?>
	
<form action="descrip.php">
	<input type="text" name="trans" value="">
	<input type="submit" name="" value="Enviar">
</form>
<p style="color:gray;"> Lembrando a criptografia usada é a alfanumerica de 3 casas</p>
</div>

</body>
</html>