<?php

$email = $_GET["email"];
var_dump($email);

$message = null;

if (isset($email)) {

    if (str_contains($email, "@") && str_contains($email, ".")) {
        $message = 'OK';
    } else {
        $message = 'FAIL';
    }
    
    $mailCheck = correctMail($email);
}
    
    function correctMail($mail) {
        if (str_contains($mail, "@") && str_contains($mail, ".")) {
            return [
                'text' => 'OK',
                'bClass' => 'success'
            ];
        }
        return [
            'text' => 'FAIL',
            'bClass' => 'danger'
        ];
}


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
                <?php if (isset($message)): ?>
                    <div class="alert alert-<?=$mailCheck['bClass'];?>" role="alert">
                       <?= $mailCheck['text']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </footer>

</body>

</html>