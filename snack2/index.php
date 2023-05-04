<!-- ## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if ((strlen($name) > 3) && (str_contains($mail, '.') && str_contains($mail, '@'))) {
    echo 'ACCESSO RIUSCITO';
    var_dump('ACCESSO RIUSCITO');
} else {
    echo 'ACCESSO NEGATO';
    var_dump('ACCESSO NEGATO');
}

/* if (str_contains($mail, '.') && str_contains($mail, '@')) {
    var_dump('contiene punto e chiocciola');
} else {
    var_dump('non li contiene');
}
 */
var_dump($name);
var_dump($mail);
var_dump($age);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form action="" method="get">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="name" aria-describedby="helpId">

                <label for="" class="form-label">Mail</label>
                <input type="text" name="mail" id="" class="form-control" placeholder="email" aria-describedby="helpId">

                <label for="" class="form-label">Number</label>
                <input type="number" placeholder="Age" name="age" class="form-control">

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </div>



    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/disjs/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>