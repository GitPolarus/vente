<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente</title>
</head>

<body>
    <ul>
        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)){
    echo "<li>$row[nom]</li>";
    }?>
    </ul>
</body>

</html>