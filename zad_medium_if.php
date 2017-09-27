<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$broj = 17;
$true1 = True;
$false1 = False;
$false2 = True;
$true2 = False;
if ($broj < 5 && ($true1 && (!$true2 || $false2) && !($false2 || !($true1 * $false2)))){
    echo " broj je manji od 5";
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
