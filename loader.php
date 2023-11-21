<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>

    <?php
    // Get variables
    
    $word = $_POST['word'];
    $text = $_POST['text'];
    ?>

<p>Testo originale: <?php echo $text; ?></p>

<p>Lunghezza testo originale: <?php echo strlen($text); ?></p>


<p>Testo censurato: <?php echo $censured_text = str_replace($word, "*", $text); ?></p>

<p>Lunghezza testo censurato: <?php echo strlen($censured_text); ?></p>

</body>

</html>