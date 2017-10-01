<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/*Kroz 'if' funkciju i njene podvrste provjeriti
  da li je varijabla broj manja od 5, manja od 10,
  manja od 15 ili veća od 14. Također koristite nekoliko
  varijabla sa vrijednostima 'true' i 'false' da malo
  zakomplicirate zadatak.
*/
$broj = 17;
$true1 = True;
$false1 = False;
$false2 = True;
$true2 = False;
if ($broj < 5 && ($true1 && (!$true2 || $false2) && !($false2 || !($true1 * $false2)))){
    echo "broj je manji od 5";
}else if ($broj < 10 && ($true1 && (!$true2 || $false2) && !($false2 || !($true1 * $false2)))){
    echo "broj je manji od 10 veći od 4";
}else if ($broj < 15 && ($true1 && (!$true2 || $false2) && !($false2 || !($true1 * $false2)))){
    echo "broj je manji od 15 veći od 9";
}else{
    echo "broj je veći od 14";
};
?>
</body>
</html>
