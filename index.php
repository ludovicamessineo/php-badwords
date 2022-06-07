<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $text = "Non dire gatto se non ce l'hai nel sacco";
    ?>

    <h3>Variabile con testo:</h3>

    <p>
        <?php 
        echo $text;
        ?>
    </p>

    <h3>Lunghezza del paragrafo:</h3>

    <p>
        <?php 
        $text_length = strlen($text);
        echo "Il numero di caratteri è " . $text_length;
        ?>
    </p>

    <h3>Bad Word :O</h3>

    <?php 
    $bad_word = $_GET['word']
    ?>

    <p>
        <?php 
        echo $bad_word;
        ?>
    </p>

    <h3>Sostituzione</h3>

    <?php
    $new_text = str_replace($bad_word, "***", $text);
    ?>

    <p>
        <?php
        echo $new_text;
        ?>
    </p>

    <h3>Nuova lunghezza del paragrafo:</h3>

    <p>
        <?php
        $new_text_length = strlen($new_text);
        echo "Il nuovo numero di caratteri è " . $new_text_length;
        ?>

    </p>

</body>
</html>