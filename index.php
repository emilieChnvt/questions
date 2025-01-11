<?php
$prenom = "toi qui visites";
$age = null;
$message = "";
$motCache = "";
$signal=false;


if(!empty($_GET['lePrenom'])){
    $prenom = $_GET['lePrenom'];
}

if(!empty($_GET['leAge']) && ctype_digit($_GET['leAge']) ){
    $age = $_GET['leAge'];
}

if($age && $age < 18 )
{
    $message = "tu es mineur";
}else if($age){
    $message = "tu es majeur";
}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<h1>J'ai une question</h1>

<form method="GET">
    <input type="text" name="lePrenom" placeholder="ton prénom?">


    <input type="text" name="leAge" placeholder="ton prénom?">
    <button type="submit" class="btn btn-success">OK</button>
</form>
<h2>salut, <?php echo $prenom; echo "<br>"; echo $age; ?>!</h2>

<form method="POST" action="autrepage.php">
    <input type="text" name="leMot" placeholder="à quel mot je pense?">
    <button class="btn btn-primary" type="submit">GO</button>
</form>


<h2><?php if($signal){echo $motCache;};?></h2>
</body>
</html>