<?php
while (TRUE) {
    fscanf(STDIN, "%s",$enemy1);
    fscanf(STDIN, "%d",$dist1);
    fscanf(STDIN, "%s",$enemy2);
    fscanf(STDIN, "%d",$dist2);
    echo ($dist1 < $dist2 ?$enemy1:$enemy2)."\n";
}

//Tirage aleatoire de 2 etiers et boucles tant que les 2 entiers sont superieurs à 10V

    do {
        $n1 = rand (10, 100);
        $n2 = rand (10, 100);
        $cond = (abs($n - $n2) > 10);
        if ($cond) {
            echo("$n1 $n2\n");
        } else { echo("Fin de la boucle\n"); }
    } while ($cond);

//foreach

   $tableau = array(
      "un" => 1,
      "deux" => 2,
      "trois" => 3,
      "dix-sept" => 17
   );

   foreach ($tableau as $indice => $valeur) {
      echo "\$tableau[$indice] => $valeur\n";
   }
   //$tableau[un] => 1
//$tableau[deux] => 2
//$tableau[trois] => 3
//$tableau[dix-sept] => 17

//parrmi ces fonctions, nous pouvons lister :

//strlen(string) : permet de déterminer le nombre de caractères d'une string
//str_split(string) : permet de créer un tableau contenant les caractères de la chaîne.
//count_chars(string) : retourne des statistiques sur les caractères utilisés dans une chaîne
//L'opérateur permettant de concaténer deux chaînes de caractères, c'est-à-dire d'ajouter ces deux chaînes l'une à la suite de l'autre, est le point : .

//Un exemple d'utilisation

    $string = "Hello world!";

    foreach (count_chars($string, 1) as $i => $val) {
        echo "Il y a $val occurence(s) de \"" , chr($i) , "\" dans la phrase.\n";
    }
//Il y a 1 occurence(s) de "w" dans la phrase.
<?php
	
	$var1=5;
	$var2=9;
	
	echo "var1=$var1\n";
	echo "var2=$var2\n";
	
	echange($var1,$var2);
	
	echo "var1=$var1\n";
	echo "var2=$var2\n";
	
	function echange(&$a,&$b) {
		$tmp=$a;
		$a=$b;
		$b=$tmp;
	}

	WhatToDoWithBeer("Servir","une Leffe");
	WhatToDoWithBeer("Affoner");
	WhatToDoWithBeer(NULL,"une Maes");
	WhatToDoWithBeer();
	
	function WhatToDoWithBeer($do="Boire",$beer="une Jupiler") {
		echo $do . " " . $beer . "\n";
	}
//Servir une Leffe
//Affoner une Jupiler
 //une Maes
//Boire une Jupiler

	echo sum(1, 2, 3, 4);

	function sum(...$numbers) {
		$acc = 0;
		foreach ($numbers as $n) {
			$acc += $n;
		}
		return $acc;
	}
<?php
	fratrie("frère et soeur");
	fratrie("frère", "Antoine");
	fratrie("soeur", "Marie", "Claire", "Lucie");

	function fratrie($type,...$noms) {
		echo "J'ai " . count($noms) . " " . $type . ". ";
		if (count($noms)>0) {
			$sp = (count($noms)>1) ? "les noms" : "le nom";
			$phrase = "Voici $sp : ";
			foreach($noms as $key => $nom) {
				$phrase .= $nom;
				if ($key != count($noms)-1) $phrase .= ", ";
			}
			echo $phrase . ".";
		}
		echo "\n";
	}
//J'ai 0 frère et soeur. 
//J'ai 1 frère. Voici le nom : Antoine.
//J'ai 3 soeur. Voici les noms : Marie, Claire, Lucie.