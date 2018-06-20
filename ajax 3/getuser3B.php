
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
</head>
<body>

<?php
$q = strval($_GET['q']);
$dbc = mysqli_connect('localhost','24916','','24916_db') or die('werkt niet dabase niet in orden');



$qeury="SELECT * FROM user WHERE FirstName LIKE '$q%' OR LastName LIKE '$q%'";

// 3. QEURY UITVOEREN
$result = mysqli_query($dbc,$qeury) or die('werkt niet (SELECT)query niet in orden');
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($dbc);
?>
</body>
</html>
