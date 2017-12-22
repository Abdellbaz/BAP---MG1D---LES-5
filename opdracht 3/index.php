<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="School">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,php">
    <meta name="author" content="Abdelaziz">

    <title>Opdracht 3</title>
    <style media="screen">

        #cheat{
            width: 400px;
            margin: 10px;

            float: left;

        }
        #practice{
            width: 400px;
            margin: 10px;

            float: left;

        }
        #imp1{

            margin-left: -10px;
        }
        #imp{

            margin: -70px;

        }
        #gotol{
            display: block;
            text-align: left;
            align-self: left;
            align-content: left;
            float: left;

        }


        #gotor{
            margin: -75px;

        }
        button{
            background-color:white;/*Green*/
            border:1px  solid Gray;
            color:black;
            text-align:center;
            text-decoration:none;
            display:inline-block;
            transition-duration:0.4s;
            cursor:pointer;
            border-radius:5px}

        button:hover{background-color:orange;}

    </style>
</head>
<body>

<h1>Opdracht 3</h1>

<?php
echo '<div id="cheat"><fieldset><legend> Cheat cheet</legend>';
echo '<textarea rows="10" cols="40">
<h> heading </h>	
<p> paragraph </p>	
<b> bold </b>	
<i> italic </i>	
<a href="url"> link name </a>
<div> ... </div>	
<img src="filename.jpg"> 	
<ul> <li> list </li> </ul>	
<br> 	L
<span style="color:red"> red </span> </textarea>';
echo '</fieldset></div>';
echo '<div id="practice"><fieldset><legend>practice</legend>';

$int = 7;
$string ='zeven';
$true =true;
$float =7.7;
$array =array(7,'zeven',true,7.7);
// var_dump() is een functie die de data type en waarde terug geeft
var_dump($int);//output is int(7)
echo "<br>";
var_dump($string);//output is string(5) "zeven"
echo "<br>";
var_dump($true);//output is bool(true)
echo "<br>";
var_dump($float);//output is float(7.7)
echo "<br>";
var_dump($array);//output is array(4) { [0]=> int(7) [1]=> string(5) "zeven" [2]=> bool(true) [3]=> float(7.7) }
echo "<br>";
// strlen() geef aan hoe lang je string is
echo strlen('dit bevat 19 tekens');//output is 19
echo "<br>";
// str_word_count() geeft aan hoeveel worden je gebruikt
echo str_word_count('we gebruiken nu 5 worden '.$int.''.$string.''.$true.''.$float.'' );//output is 6
echo '<br>';
echo 'welkom';//output is welkom
echo '<br>';
// strrev() doet de omgekeerde van wat in vult
echo strrev('welkom');//output is moklew
echo '<br>';
// html heeft het ook
echo '<bdo dir="rtl">welkom</bdo>';//output is moklew
echo '</fieldset></div><div id="imp1">';



$change = array('Ik'=>1, 'I'=>1, 'Watashi'=>1, 'Wǒ'=>1, 'Ich'=>1);
$changes = array(' ben'=>1, ' am'=>1, ' wa'=>1, ' shì'=>1, ' bin'=>1);
$changez = array(' een man'=>1, ' a man'=>1, ' otoko desu'=>1, ' yīgè nánrén'=>1, ' ein Mann'=>1);

print_r(array_rand($change,1));
print_r(array_rand($changes,1));
print_r(array_rand($changez,1));

echo '<br><br><br><br><br>';
echo '</div>';
function myFunction(){

    $images = array('http://3.bp.blogspot.com/-6jRYjbxBsnI/T87-8u7eXzI/AAAAAAAI7wA/22AohWiICdE/s1600/winter+wallpaper+backgrounds+%281%29.png'=>1,'http://1.bp.blogspot.com/_2IU2Nt4rD1k/S0HDJn93bKI/AAAAAAAAAoc/6FvgH15wFHA/s400/3D+Landscape+%286%29.jpg'=>1,'http://1.bp.blogspot.com/_RAlP3BmEW1Q/TQX5iLmaRxI/AAAAAAAACPo/rlWEYeLOY74/s400/The-best-top-winter-desktop-wallpapers-7.jpg'=>1,'https://i.pinimg.com/474x/6d/fe/a9/6dfea929407978c68bd92aad1afe7639--winter-wallpaper-hd-scenery-wallpaper.jpg'=>1,'http://4.bp.blogspot.com/_e8UnOo2PQhY/S0xpeCqd4_I/AAAAAAAAAFE/c9WCU2XCDYo/s400/Lakeside%2BWinter%2BCamping%2Bwallpaper.png'=>1,'https://i.pinimg.com/736x/01/fc/06/01fc06bfc3e9af42d8d052628b0be142--winter-scenes-snow-scenes.jpg'=>1);

    print_r(array_rand($images,1));}




?>
<div id="imp">
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;">
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;">
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;"><br>
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;">
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;">
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;"><br>
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;">
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;">
    <img src="<?php myFunction() ?>" style="height:5%;width:5%;">

    <button onClick="window.location.reload()">Refresh</button>
</div>

<br><br><br><br><br>
<div id="gotol"><form action="#" method="POST"><button  type="submit" name="button" value="Verstuur">Rune</button><button type="reset" value="Reset">Reset</button><fieldset><legend>Code</legend><textarea rows="50" cols="50" name="Code" placeholder="<h1>hallo</h1> type html code"></textarea></fieldset></form></div>

<?php echo '<br><br><br><br><br>';echo '<div id="gotor"><fieldset style="max-width: 500px;"><legend><strong> Your Home Page</strong></legend><p>'.@$_POST['Code'].'</p></fieldset></div>'; ?>





</body>
</html>