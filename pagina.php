<?php
 session_start();
//if isset verzend knop en !empty $_get[variabels] dan output de multiple checkboxes, die een ander name hebben
//omdat ze nu dezelde naam hebben wordt er 1 waarde meegegeven. Dit hoort niet bij de opdracht, wel heb ik dat probleem opgelost.
$nl="<br/>";

echo"Naam ". "<b>".$_GET["naam1"] ."</b>".$nl;
echo "Klas " . "<b>".$_GET["selecteerKlas"] ."</b>".$nl;
echo"Hoe positief ben je op dit moment over je opleiding ". "<b>".$_GET["positief"] ."</b>".$nl;
echo"Ga je door met deze opleiding ". "<b>".$_GET["positief2"] ."</b>".$nl;
echo"Wat zijn je sterke kanten in programmeren ". "<b>".$_GET["positief3"] ."</b>".$nl;
echo"Ga je door met deze opleiding ". "<b>".$_GET["sterkeKant4"] ."</b>".$nl;
echo"Wat zijn je sterke kanten in programmeren ". "<b>".$_GET["zelfReflectie5"] ."</b>".$nl;
echo"Aan welke skills moet je nog wat extra aandacht besteden ". "<b>".$_GET["sterkeKant6"] ."</b>".$nl;
echo"Wat vind je het leukste vak tot nu toe ". "<b>".$_GET["motivatie7"] ."</b>".$nl;
echo"Extra bericht ". "<b>".$_GET["textGebied"] ."</b>".$nl;
//. $_GET["sterkeKant"]." ".$_GET["motivatie"]." ".$_GET["textGebied"]

?>
