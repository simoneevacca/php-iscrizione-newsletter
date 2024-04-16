<?php

require_once __DIR__ . '/helpers/functions.php';


$email = $_GET["email"];


$alertMessage = null;
$alertMessage = checkMail($email);



$newsletterCheck = correctMail($email);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>



    <footer class="bg-dark">
        <div class="container text-white d-flex justify-content-center">
            <div class="row col-4">
                <h2>Iscriviti alla newsletter</h2>
                <p>Rimani aggiornato sulle Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam sequi rerum
                    consectetur ratione non ipsum eum voluptate dolor? Soluta, quidem?</p>
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">Inseisci la tua Mail</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId"
                            placeholder="Scrivi qui" />
                    </div>
                    <button type="submit" class="btn btn-primary">Iscriviti</button>


                </form>
                <?php if (isset($alertMessage)): ?>
                    <div class="alert alert-<?= $newsletterCheck['bClass']; ?>" role="alert">
                        <?= $newsletterCheck['text']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </footer>

</body>

</html>