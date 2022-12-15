<?php
    $len = intval($_GET['length']);
    require './partials/functions.php';
    $password = generatePassword($len);
    var_dump($password);

    session_start();
    $_SESSION['password'] = $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="title text-center mt-4">
            <h1>Strong Password Generator</h1>
            <h3>Genera una password sicura</h3>
        </div>
        <div class="mt-5 text-center">
            <p>
                <?php if(!empty($len)) { 
                     header("Location: password.php");
                    } else { 
                        echo 'Nessun parametro valido inserito';
                    } ?> 
            </p>
        </div>
        <form action="index.php" method="GET" class="form-control my-5">
            <div class="row g-3 align-items-center my-5">
                <div class="col-auto">
                    <label for="inputPassword" class="col-form-label">Lunghezza Password</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputPassword" class="form-control" name="length">
                </div>
            </div>
            <div class="characters">
                <h5>Quali caratteri vuoi usare?</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="words" value="words" id="words">
                    <label class="form-check-label" for="words">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="numbers" value="numbers" id="numbers">
                    <label class="form-check-label" for="numbers">
                        Numeri
                    </label>
                </div>
                <div class="form-check mb-5">
                    <input class="form-check-input" type="checkbox" name="symbols" value="symbols" id="symbols">
                    <label class="form-check-label" for="symbols">
                        Simboli
                    </label>
                </div>
            </div>                
            <div class="buttons">
               <a type="submit" href="password.php">Invia a pagina</a>
                  <button type="submit" class="btn btn-primary">Invia</button> 
               <button type="reset" class="btn btn-secondary">Annulla</button> 
            </div>           
        </form>        
    </div>
</body>
</html>