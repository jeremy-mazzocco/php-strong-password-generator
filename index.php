<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php passwords</title>
</head>

<body>
    <div class="container">

        <h1>
            Strong Password Generator
        </h1>
        <h2>
            Genera una password sicura
        </h2>

        <div class="sub-container">
            <form>
                <div class="parametro">
                    <input type="text" placeholder="nessun parametro vallido inserito" id="input-1" name="parametro" value="<?php echo $_GET['parametro']; ?>">
                </div>

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