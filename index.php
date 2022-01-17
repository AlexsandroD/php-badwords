<!-- Ciao ragazzi,
Esercizio di oggi: PHP Badwords
nome repo: php-badwords
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php
    $sentence="Hai rotto il cavolo!";
    $modifiedSentence= str_replace('cavolo', $_GET['word'],$sentence);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>

    <h1>Let's be offensive!</h1>
    <p><?php echo $sentence ;?></p>
    <p>The string length is: <?php echo strlen($sentence); ?>.</p>
    <p><?php echo str_replace($_GET['word'] ,'***',$modifiedSentence); ?></p>
    <p>The new string length is: <?php echo strlen($modifiedSentence); ?>.</p>
</body>
</html>