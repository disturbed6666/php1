<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Naslov</h1>
<?php
/*Provjerite da li varijabla broj ima vrijednost (12)
  manju od 5, manju od 10, manju od 15, ili veću ili jednaku 15.
*/
$broj = 12;
if ($broj < 5){
    echo " broj je manji od 5";
}else if ($broj < 10){
    echo "broj je manji od 10 veći od 4";
}else if ($broj < 15){
    echo "broj je manji od 15 veći od 9";
}else{
    echo "broj je veći od 14";
};
?>
</body>
</html>

