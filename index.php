<?php
//Exo 1
$arrayMonth = [
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
];

//Exo 2
echo $arrayMonth[2]."<br>";

//Exo 3
echo $arrayMonth[5]."<br>";

//Exo 4
echo $arrayMonth[7] = "Août";

echo "<br><br>";

//Exo 5
$arrayDepartements = [
    "62" => "Pas de calais",
    "80" => "Somme",
    "59" => "Nord",
    "60" => "Oise",
    "02" => "Aisne"
];

//Exo 6
echo $arrayDepartements["59"]."<br>";

//Exo 7
echo $arrayDepartements["51"] = "Marne";

echo "<br><br>";

//Exo 8
for($i = 0; $i < count($arrayMonth); $i++){
    echo $arrayMonth[$i]."<br>";
}

//Exo 9
foreach($arrayDepartements as $key => $val){
    echo $val.'<br>';
}

//Exo 10
foreach($arrayDepartements as $key => $val){
    echo "Le département ".$val." a le numéro ".$key."<br>";
}