<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Naslov</h1>
<?php
/* Napisati 'switch-case' koji će sadržavati 
   višekratnike broja 6 (od 1. do minimalno 4.)
   i vidjeti da li je zadana varijabla višekratnik
   broja 6 (i ako je među ta 4 koliki je) ili nije.
*/
$broj = 12;
switch ($broj) {
    case 6:
        echo " broj je 6 i višekratnik je broja 6";
        break;
    case 12:
        echo "broj je 12 i višekratnik je broja 6";
        break;
    case 18:
        echo "broj je 18 i višekratnik je broja 6";
        break;
    case 24:
        echo "broj je 24 i višekratnik je broja 6";
        break;
    default:
        echo "neznamo koliki je broj i da li je višekratnik broja 6";
};
?>
</body>
</html>

