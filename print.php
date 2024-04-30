<!-- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->
<?php
$paragraph = $_GET['paragraph'];
$badWord = $_GET['bad-word'];
$censoredPar = str_replace($badWord, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>PHP Bad Words</title>
</head>

<body>
    <div class="container">
        <div class="row p-4">
            <div>Your paragraph:</div>
            <p class="card"><?php echo $paragraph ?></p>
            <div>Your paragraph length:</div>
            <div class="card"><?php echo strlen($paragraph) ?></div>
        </div>
        <div class="row p-4">
            <div>Censored paragraph:</div>
            <div class="card"><?php echo $censoredPar ?></div>
            <div class="mt-2">Censored paragraph length:</div>
            <div class="card"><?php echo strlen($censoredPar) ?></div>
        </div>
        <div class="text-center">
            <a href="index.php" class="btn btn-dark m-auto">Try with a new paragraph</a>
        </div>

    </div>
</body>

</html>