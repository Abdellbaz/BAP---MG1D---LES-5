<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="School">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,php">
    <meta name="author" content="Abdelaziz">

    <title>Opdracht 3</title>
    <style type="text/css">
        body{text-align: center}
        th, td,tr {
            padding: 0.2em;
            font-size: 1.2em;
            color: Red;
            border: 2px solid black;
            text-align: center;}
        table{border: 2px solid black; margin: auto;}
        th{background-color: yellow; color: black; }</style>
</head>
<body>

<?php
//$dobbelWorp;//global array voor de huidige worp     $dobbelWorp[$x] = $worp;//registratie huidige worp var_dump($dobbelWorp);
function randomNummer($num) {return floor(rand() * $num);}
function circle($x,$y,$num,$im){
    $background_color = imagecolorallocate($im, intval(randomNummer(255)),intval(randomNummer(255)),intval(randomNummer(255)) );
    $color = imagecolorallocate($im, intval(randomNummer(255)),intval(randomNummer(255)),intval(randomNummer(255)) );
    imagefilledellipse($im, $x, $y,40,40, $color );
    imagestring($im, 5, $x-3, $y-7, "$num", $background_color);}

function triangle($x,$y,$num,$im){ $r = 20;$y-5;
    $points = array($x-$r,  $y+$r, $x+$r, $y+$r, $x,  $y-$r  );
    $background_color = imagecolorallocate($im, intval(randomNummer(255)),intval(randomNummer(255)),intval(randomNummer(255)) );
    $color = imagecolorallocate($im, intval(randomNummer(255)),intval(randomNummer(255)),intval(randomNummer(255)) );
    imagefilledpolygon($im, $points, 3, $color );
    imagestring($im, 5, $x-3, $y, "$num", $background_color);}

function dobbelSteen($worp){

    $im = imagecreate(200, 200) or die("Cannot Initialize new GD image stream");

    switch ($worp){
        case 1:

            circle(100,100,1,$im);
            break;
        case 2:
            circle(50,50,1,$im);
            circle(150,150,2,$im);
            break;
        case 3:
            circle(50,50,1,$im);
            circle(100,100,2,$im);
            circle(150,150,3,$im);
            break;
        case 4:
            circle(50,50,1,$im);
            circle(150,50,2,$im);
            circle(50,150,3,$im);
            circle(150,150,4,$im);
            break;
        case 5:
            circle(50,50,1,$im);
            circle(150,50,2,$im);
            circle(100,100,3,$im);
            circle(50,150,4,$im);
            circle(150,150,5,$im);
            break;
        case 6:
            circle(50,50,1,$im);
            circle(150,50,2,$im);
            circle(50,100,3,$im);
            circle(150,100,4,$im);
            circle(50,150,5,$im);
            circle(150,150,6,$im);
            break;
        case 7:
            circle(50,50,1,$im);
            circle(150,50,2,$im);
            circle(50,100,3,$im);
            circle(100,100,4,$im);
            circle(150,100,5,$im);
            circle(50,150,6,$im);
            circle(150,150,7,$im);
            break;
        case 8:
            circle(50,50,1,$im);
            circle(100,50,2,$im);
            circle(150,50,3,$im);
            circle(50,100,4,$im);
            circle(150,100,5,$im);
            circle(50,150,6,$im);
            circle(100,150,7,$im);
            circle(150,150,8,$im);
            break;
        case 9:
            circle(50,50,1,$im);
            circle(100,50,2,$im);
            circle(150,50,3,$im);
            circle(50,100,4,$im);
            circle(100,100,5,$im);
            circle(150,100,6,$im);
            circle(50,150,7,$im);
            circle(100,150,8,$im);
            circle(150,150,9,$im);
            break;}

    imagepng($im,"C$worp.png");
    imagedestroy($im);
}

function dobbelSteen1($worp)
{

    $im = imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    switch ($worp) {
        case 1:
            triangle(100, 95, 1, $im);
            break;
        case 2:
            triangle(50, 50, 1, $im);
            triangle(150, 150, 2, $im);
            break;
        case 3:
            triangle(50, 50, 1, $im);
            triangle(100, 100, 2, $im);
            triangle(150, 150, 3, $im);
            break;
        case 4:
            triangle(50, 50, 1, $im);
            triangle(150, 50, 2, $im);
            triangle(50, 150, 3, $im);
            triangle(150, 150, 4, $im);
            break;
        case 5:
            triangle(50, 50, 1, $im);
            triangle(150, 50, 2, $im);
            triangle(100, 100, 3, $im);
            triangle(50, 150, 4, $im);
            triangle(150, 150, 5, $im);
            break;
        case 6:
            triangle(50, 50, 1, $im);
            triangle(150, 50, 2, $im);
            triangle(50, 100, 3, $im);
            triangle(150, 100, 4, $im);
            triangle(50, 150, 5, $im);
            triangle(150, 150, 6, $im);
            break;
        case 7:
            triangle(50, 50, 1, $im);
            triangle(150, 50, 2, $im);
            triangle(50, 100, 3, $im);
            triangle(100, 100, 4, $im);
            triangle(150, 100, 5, $im);
            triangle(50, 150, 6, $im);
            triangle(150, 150, 7, $im);
            break;
        case 8:
            triangle(50, 50, 1, $im);
            triangle(100, 50, 2, $im);
            triangle(150, 50, 3, $im);
            triangle(50, 100, 4, $im);
            triangle(150, 100, 5, $im);
            triangle(50, 150, 6, $im);
            triangle(100, 150, 7, $im);
            triangle(150, 150, 8, $im);
            break;
        case 9:
            triangle(50, 50, 1, $im);
            triangle(100, 50, 2, $im);
            triangle(150, 50, 3, $im);
            triangle(50, 100, 4, $im);
            triangle(100, 100, 5, $im);
            triangle(150, 100, 6, $im);
            triangle(50, 150, 7, $im);
            triangle(100, 150, 8, $im);
            triangle(150, 150, 9, $im);
            break;
    }
    imagepng($im, "T$worp.png");
    imagedestroy($im);
}
for ($x = 0; $x <= 15; $x++) {
    $worp = rand(1,9);
    dobbelSteen($worp);
    dobbelSteen1($worp);
}


$Torp=array();
$Corp=array();
$p1Score=0;
$p2Score=0;


for ($x = 1; $x <= 9; $x++) {$worp = rand(1,9);print "<img alt='circle' src=C$worp.png?".date("U").">";array_push($Corp,$worp);}
echo "<h4>player 1</h4>";
sort($Corp);
$aScore=analyse($Corp);
if (analyse($Corp)==1){echo 'abdel1';}
foreach($Corp as $x) {switch ($x){case 1:$p1Score +=10;break;case 2:$p1Score +=2;break;case 3:$p1Score +=3;break;case 4:$p1Score +=4;break;
    case 5:$p1Score +=5;break;case 6:$p1Score +=6;break;case 7:$p1Score +=7;break;case 8:$p1Score +=8;break;case 9:$p1Score +=9;break;}echo $x;}
echo "<br>";
echo "<table><tr><th>0</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr><tr>";
foreach($aScore as $x) {echo '<td>'.$x.'</td>';switch ($x){case 1:$p1Score+=$x*10;break;case 2:$p1Score+=$x*20;break;case 3:$p1Score+=$x*30;break;case 4:$p1Score+=$x*40;break;case 5:$p1Score+=$x*50;break;}}
echo "</tr></table>";

echo "<h4>player 1 Score:$p1Score </h4>";

for ($x = 1; $x <= 9; $x++) {$worp = rand(1,9);print "<img alt='triangle' src=T$worp.png?".date("U").">";array_push($Torp,$worp);}
echo "<h4>player 2</h4>";
sort($Torp);
$aScore=analyse($Torp);
foreach($Torp as $x) {switch ($x){case 1:$p2Score +=10;break;case 2:$p2Score +=2;break;case 3:$p2Score +=3;break;case 4:$p2Score +=4;break;
    case 5:$p2Score +=5;break;case 6:$p2Score +=6;break;case 7:$p2Score +=7;break;case 8:$p2Score +=8;break;case 9:$p2Score +=9;break;}echo $x;}
echo "<br>";
echo "<table><tr><th>0</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr><tr>";
foreach($aScore as $x) {echo '<td>'.$x.'</td>';switch ($x){case 1:$p2Score+=$x*10;break;case 2:$p2Score+=$x*20;break;case 3:$p2Score+=$x*30;break;case 4:$p2Score+=$x*40;break;case 5:$p2Score+=$x*50;break;}}
echo "</tr></table>";

echo "<h4>player 2 Score:$p2Score </h4>";

function analyse($a){//lustellers

    $aScore = array (0,0,0,0,0,0,0,0,0,0);//init op 0
    for ($i = 1 ; $i <= 9 ; $i++){//outer loop
        for ($j = 0 ; $j <9 ; $j++){//inner loop
            if ($a[$j] == $i){

                $aScore[$i]++;
            }}}

    return $aScore; //$aScore is een lokale var.
    //via return komt de array 'buiten de functie'
}




?>
<button onClick="window.location.reload()">Refresh</button>
<br><br>
<div id="validatie">
    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2F24916.hosts.ma-cloud.nl%2Fbewijzenmap%2Fperiode1.1%2Fbap%2FPokerspel%2FpokerSpel.php" target="_blank">
        <img alt="Valide HTML5" src="http://blog.boyet.com/blog/files/media/image/valid-html5-blue.png"></a>
    <a href="http://www.css-validator.org/validator?uri=http%3A%2F%2F24916.hosts.ma-cloud.nl%2Fbewijzenmap%2Fperiode1.1%2Fbap%2FPokerspel%2FpokerSpel.php&profile=css21&usermedium=all&warning=1&lang=en" target="_blank">
        <img alt="Valide CSS" src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif"></a>
</div>
</body>
</html>
