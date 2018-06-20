<?php
$resultArray=array();
$search = strval($_GET['search']);
$type = strval($_GET['type']);

$dbc = mysqli_connect('localhost','24916','','24916_db') or die('werkt niet dabase niet in orden');
$qeury="SELECT * FROM country WHERE Name LIKE '$search%'";
$result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');

if ($type=='list'){
    while($row = mysqli_fetch_array($result)) {$resultArray[]=$row['Name'];}
    echo json_encode($resultArray);
    /*foreach ($resultArray as $i){
          echo $i.'<br>';
      }*/}

else  if ($type=='answer'){
    $qeury="SELECT * FROM country WHERE Name LIKE '$search'";
    $result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');
    while($row = mysqli_fetch_array($result)) {
        echo  '<h1 onclick="showList(code.innerHTML,\'info\')" > ' . $row['Name'] . "</h1>
        <p id='code'><strong>Code               :   </strong>" . $row['Code'] . "</p>
        <p><strong>Name               :   </strong>" . $row['Name'] . "</p>
        <p><strong>Continent          :   </strong>" . $row['Continent'] . "</p>
        <p><strong>Region             :   </strong>" . $row['Region'] . "</p>
        <p><strong>SurfaceArea        :   </strong>" . $row['SurfaceArea'] . "</p>
        <p><strong>IndepYear          :   </strong>" . $row['IndepYear'] . "</p>
        <p><strong>Population         :   </strong>" . $row['Population'] . "</p>
        <p><strong>LifeExpectancy     :   </strong>" . $row['LifeExpectancy'] . "</p>
        <p><strong>GNP                :   </strong>" . $row['GNP'] . "</p>
        <p><strong>GNPOld             :   </strong>" . $row['GNPOld'] . "<</p>
        <p><strong>LocalName          :   </strong>" . $row['LocalName'] . "</p>
        <p><strong>GovernmentForm     :   </strong>" . $row['GovernmentForm'] . "</p>
        <p><strong>HeadOfState        :   </strong>" . $row['HeadOfState'] . "</p>
        <p><strong>Capital            :   </strong>" . $row['Capital'] . "</p>
        <p ><strong>Code2              :   </strong>" . $row['Code2'] . "</p>";}}


else if ($type=='info') {
    $search= str_replace('<strong>Code               :   </strong>','',$search);
    $qeury="SELECT * FROM countrylanguage WHERE CountryCode LIKE '$search'";
    $result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');

    echo " <h1>Countrylanguage</h1><table><tr><th>CountryCode</th><th>Language</th><th>IsOfficial</th><th>Percentage</th></tr>";
    while($row = mysqli_fetch_array($result)) {echo "<tr><td>" . $row['CountryCode'] . "</td> <td>" . $row['Language'] . "</td> <td>" . $row['IsOfficial'] . "</td> <td>" . $row['Percentage'] . "</td></tr>";}echo "</table>";

    $qeury="SELECT * FROM city WHERE CountryCode LIKE '$search'";
    $result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');

    echo " <h1>City</h1><table><tr><th>CountryCode</th><th>Name</th><th>District</th><th>Population</th></tr>";
    while($row = mysqli_fetch_array($result)) {echo "<tr><td>" . $row['CountryCode'] . "</td> <td>" . $row['Name'] . "</td> <td>" . $row['District'] . "</td> <td>" . $row['Population'] . "</td></tr>";}echo "</table>";

}
mysqli_close($dbc);


?>