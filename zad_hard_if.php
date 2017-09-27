<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$broj1 = 17;
$broj2 = 21;
$broj3 = 40;
if ($broj1 > $broj2 && $broj1 > $broj3 && $broj1 >= 10){
    echo "broj1 je veći od broja2 i broja3 i veći je od 10";
}else if ($broj2 > $broj1 && $broj2 > $broj3 && $broj2 >= 10){
    echo "broj2 je veći od broja1 i broja3 i veći je od 10";
}else if ($broj3 > $broj1 && $broj3 > $broj2 && $broj3 >= 10){
    echo "broj3 je veći od broja1 i broja2 i veći je od 10";
}else{
    echo "neznamo koji je broj veci";
};
?>
</body>
</html>
