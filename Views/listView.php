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
        <?php
        include_once "Models/Client.php";
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $client = new Client($row['id'], $row['nom']);
     echo "<li> id: $client->id | $client->name</li>";
    }?>
    </ul>
</body>

</html>