<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
/*Koristeći 'switch-case' provjerite da li je 
  varijabla 'broj' broj ili je string. Također 
  ako je broj provjerite da li iznosi 1,2 ili 3.
*/ 
$broj = "broj";
switch ($broj) {
    case 1:
        echo "varijabla broj je broj i iznosi 1";
        break;
    case 2:
        echo "varijabla broj je broj i iznosi 2";
        break;
    case 3:
        echo "varijabla broj je broj i iznosi 3";
        break;
    case "1":
        echo "varijabla broj je string i ima vrijednost \"1\"";
        break;
    case "2":
        echo "varijabla broj je broj i ima vrijednost \"2\"";
        break;
    case "3":
        echo "varijabla broj je broj i ima vrijednost \"3\"";
        break;
    default:
        echo "varijabla broj je broj i ima vrijednost \"broj\"";
};
?>
</body>
</html>

