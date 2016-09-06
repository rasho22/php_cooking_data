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

<pre>


<?php

//FILMS

	$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
	$brut = json_decode($string, true);
	$top = $brut["feed"]["entry"];
	$arraylenght = count($top);
	print_r($top[0]['im:name']['label']);

	print_r($top);
	?>
</pre>



<pre>

		<h3>
			<?php
			//les 10top films
			echo '<ol>';
			for ($i=0; $i < 10; $i++) { 
				
				echo '<li>'.$top[$i]['im:name']['label']. '</li>';
				
			}
			echo'</ol>';

			?>
		</h3>
		
</pre>

<?php

//trouver la position de Gravity

	for ($i=0; $i < $arraylenght; $i++) { 
	if ($top[$i]['im:name']['label'] == "Gravity") {
		echo 'Gravity se trouve à la position: '.$i;
	}
}

echo "<br>";
//le réalisteur de film The LEGO Movie

	for ($director=0; $director < $arraylenght; $director++) { 
		if ($top[$director]['im:name']['label'] == "The LEGO Movie") {
			echo $top[$director]['im:artist']['label'];
		}
	}

echo "<br>";

//les films sont soties avant 2000
$dateSortie=0;
for ($i=0; $i < ; $i++) { 
	# code...
}

/*
$date=$top[0]['im:releaseDate']['label']<'2000';
for ($i=1; $i < $list; $i++) { 
	if ($date<$top[$i]['im:releaseDate']['label']) {
		# code...
	}
}*/
	?>	