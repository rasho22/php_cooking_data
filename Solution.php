<?php  
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);
 ?>

<?php 
	$result = count($dico);
	echo "$result <br>";
?>

<?php  
	$motslen = array();
	foreach ($dico as $mots) {
	    if (strlen($mots) == 15) {
	        array_push($motslen, $mots);
	    }
	}
	echo count($motslen); 
	echo "<br>";
?>

<?php 
	$lettreW = array();
	foreach ($dico as $lettre) {
		if(strpos($lettre, 'w') !== false){
			array_push($lettreW, $lettre);
		}
		
	}
	echo count($lettreW);
	echo "<br>";
	
?>

<?php 
	$lettreQ = array();
	foreach ($dico as $lettre) {
    if (substr($lettre, -1) == "q") {
        array_push($lettreQ, $lettre);
    }
}
echo count($lettreQ);
echo "<br>";
?>


<?php
	$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
	$brut = json_decode($string, true);
	$top = $brut["feed"]["entry"];
	$array= count($top);
	print_r($array);

?>

