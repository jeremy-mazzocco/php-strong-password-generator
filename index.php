<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php passwords</title>

    <?php

    $length = $_GET['parametro'];

    $capitalletters = range('A', 'Z');
    $smalletters = range('a', 'z');
    $numbers = range(0, 9);
    $specials = ["!", "@", "#", "$", "%", "&", "*", "~"];

    $joined = [...$capitalletters, ...$smalletters, ...$numbers, ...$specials];

    $newpass = '';

    for ($i = 0; $i < $length; $i++) {
        $randomNu = rand(0, count($joined) - 1);
        $randomLet = $joined[$randomNu];
        $newpass .= $randomLet;
    }


    ?>

    <?php include "functions.php"; ?>
</head>

<body>
    <div class="container">
        <!-- title -->
        <h1>
            Strong Password Generator
        </h1>
        <h2>
            Genera una password sicura
        </h2>
        <!-- sub-container -->
        <div class="sub-container">
            <form>

                <div class="parametro">
                    <input type="number" placeholder="lunghezza password" id="input-1" name="parametro" value="<?php echo $_GET['parametro']; ?>">
                </div>
                <?php
                echo $newpass

                ?>

                <div class="details">
                    <div class="password">
                        Lunghezza password: <input type="text">
                    </div>
                    <div class="options">

                    </div>
                    <div class="buttons">
                        <input type="submit" value="Invia">
                        <button>
                            Annulla
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>