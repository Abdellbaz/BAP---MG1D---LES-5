<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Ma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
         <style>
             body{
                 font-family: 'Source Code Pro', monospace;
             }
             input {
                 width: 100%;
                 margin: 8px 0;
                 padding: 12px 20px;
                 border-radius: 4px;
             }

             input[type=text], select {
                 display: inline-block;
                 border: 1px solid #ccc;

                 box-sizing: border-box;
             }
             input:focus {
                 background-color: yellow;
             }
             input[type=submit] {
                 background-color: #4CAF50;
                 color: white;
                 border: none;
                 cursor: pointer;
             }

             input[type=submit]:hover {
                 background-color: #45a049;
             }

             form {
                 border-radius: 5px;
                 background-color: #f2f2f2;
                 padding: 15px;
             }
             .wrapper {
                 width: 50%;
             }
             .showSpaces{
                 white-space:pre;
             }

         </style>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
			 }
			// "schrijf hier de benodigde code"
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Abdelaziz ELbaze GD1B</legend>
				 <input type = "text" name = "input1"  placeholder = "string 1" value="<?php  echo $input1;  ?>" ><br>
				 <input type = "text" name = "input2"   placeholder = "string 2" value="<?php  echo $input2;  ?>" >
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php
					// "schrijf hier de benodigde code"
			?><ul>
					<li class="showSpaces">Ingevoerde string 1:  <strong><?php  echo $input1;  ?> </strong></li>
					<li class="showSpaces">Ingevoerde string 2:  <strong><?php  echo $input2;  ?></strong> </li>
					<li>String 1 getrimd trim():   <strong><?php   echo trim($input1);    ?> </strong></li>
                    <li>String 2 getrimd trim():   <strong><?php   echo trim($input2);    ?> </strong></li>
                    <li>String 3 is de concatenation van string 1 en string 2:  <strong> <?php   echo trim($input1).trim($input2);     ?></strong> </li>
                    <li>De lengte van string 3 is:  <strong><?php   echo strlen(trim($input1).trim($input2));    ?> characters</strong> </li>
                    <li>Zoeken naar spaties:  <strong><?php   echo strrpos(trim($input1).trim($input2)," ");  ?></strong> </li>
                    <li>Zoeken naar @. Er zit een @ op positie:  <strong><?php   echo strrpos(trim($input1).trim($input2),"@");  ?></strong> </li>
                    <li>Zoeken naar "." . Er zit een "." op positie:  <strong> <?php   echo strrpos(trim($input1).trim($input2),".");  ?></strong> </li>
                    <li>Zoek naar substring "PHP" vervang dit door "NodeJS"   <strong><?php  echo str_replace("PHP","NodeJS",trim($input1).trim($input2));   ?></strong> </li>
                    <li>Wijzig de eerste letter van string 3 naar hoofdletter:  <strong> <?php   echo ucfirst(trim($input1).trim($input2));    ?> </strong></li>
                <li>Alles in hoofdletters:   <strong><?php   echo strtoupper(trim($input1).trim($input2));    ?></strong></li>


            </ul>

            <hr>
            <ul> <li> <strong><?php
                    $email = (filter_var(trim($input1).trim($input2), FILTER_VALIDATE_EMAIL) ? trim($input1).trim($input2).' zou een geldig e-mail adres kunnen zijn ' : trim($input1).trim($input2).' is geen geldig e-mail adres.');
                    echo $email;
                    ?></strong></li></ul>
				<hr>
				<ol>
                    <li>Opdracht:<br> Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander</a></li>
				<li>Hoe moet jij inleveren?: <br>
						1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud<br>
						2) Link naar jouw code bij GITHUB</li>
				<li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
				<li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
				</ol>
			</div>
	 </body>
</html>
