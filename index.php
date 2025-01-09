<?php
$prenom = "toi qui visites";
$age = null;

if(!empty($_GET['lePrenom'])){
    $prenom = $_GET['lePrenom'];
}
if(!empty($_GET['leAge']) || ctype_digit($_GET['leAge'])){
    if($_GET['leAge'] >= 18){
        $age = "tu es majeur";
    }else{
        $age = "tu es mineur";
    }

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

</body>
</html>