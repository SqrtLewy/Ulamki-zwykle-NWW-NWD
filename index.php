<html>
<head>
    <title>Zadanie - Ułamki zwykłe</title>
    <meta charset="utf-8"/>
</head>
<body>

<form action="index.php" method="post">
    licznik1: <input type="text" name="l1"/></br>
    mianownik1: <input type="text" name="m1"/></br>
    licznik2: <input type="text" name="l2"/></br>
    mianownik2: <input type="text" name="m2"/></br>
    <button type="submit">Dodaj ułamki!</button>
</form>

<?php
$wartoscd = 1;
$wartoscg = 1;
$l1 = $_POST['l1'];
$l2 = $_POST['l2'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$x1 = $l1 * $m2;
$x2 = $l2 * $m1;
$dol = $m1 * $m2;
$gora = $x1 + $x2;
echo "$l1/$m1 + $l2/$m2 = $gora/$dol";
echo "<br>";
$a = $dol;
$b = $gora;
print ("Największy wspólny dzielnik liczb $b i $a to: ");
while ($a != $b) {
    if ($a < $b) {
        $pom = $a;
        $a = $b;
        $b = $pom;
    }
    $a = $a - $b;
}
print ($a);
$wartoscg = $gora / $a;
$wartoscd = $dol / $a;
echo "<br>";
echo "<br>";
echo $wartoscg;
echo "<br>";
echo "--";
echo "<br>";
echo $wartoscd;

$nww = ($wartoscg * $wartoscd) / $a;
echo "<br><br>";
echo "Najmniejsza wspólna wielokrotność: $nww";

?>
</body>
</html>