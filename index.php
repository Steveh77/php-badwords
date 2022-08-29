<?php
$text ='Lorem ipsum dolor sit amet ipsum consectetur adipisicing ipsum elit.';
$bad_word = $_GET['badWord'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<p><?php echo strlen($text)?></p>
<p><?php echo $text?></p>
<p><?php echo $newText = str_replace($bad_word,'***',$text)?></p>
<p><?php echo strlen($newText)?></p>

<body>
</body>

</html>