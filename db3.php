
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
$q = intval($_GET['q']);
$v = (int)$q;

$db = mysqli_connect('localhost', 'root','', 'crypto');
if (!$db) {
    die('Could not connect: ' . mysqli_error($db));
}

mysqli_select_db($db,'crypto');
$sql= "ALTER TABLE currency ADD CHECK ('market_cap' > 1000000000); SELECT * FROM currency";
$result = mysqli_query($db,$sql);

echo "<table>
<tr>
<th>Currency ID</th>
<th>Name</th>
<th>Market Cap</th>
<th>Symbol</th>
<th>Price</th>
<th>Supply</th>
<th> Daily Volume</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['currency_id'] . "</td>";
    echo "<td>" . $row['currency_name'] . "</td>";
    echo "<td>" . $row['market_cap'] . "</td>";
    echo "<td>" . $row['symbol'] . "</td>";
    echo "<td>" . $row['average_price'] . "</td>";
    echo "<td>" . $row['circulating_supply'] . "</td>";
    echo "<td>" . $row['daily_volume'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($db);
?>
</body>
</html>