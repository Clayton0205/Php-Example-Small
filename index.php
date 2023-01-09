<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Text  -->
<p>This is paragraph</p>
<?php
echo "Hello World";
?>
<p>This is also paragraph</p>

<br>

<!-- variables -->
<?php
$name = "Clayton";
echo $name. " is a handsome fellow";
?>

<br>

<!-- input  -->
<form method="GET">
    <input text="text" name="person">
    <button>Submit</button>
</form>
<?php
$name = $_GET['person'];
echo $name. " is a handsome fellow";
?>

<br>

<!-- function -->
<?php

echo strlen("Hi Clayton");

?>
<br>
<?php

echo str_word_count("Hi Clayton");

?>
<br>
<?php

echo strrev("Hi Clayton");

?>
<br>
<?php

echo strpos("Hi Clayton", "Hi");

?>
<br>
<?php

echo str_replace("Clayton","Zero","Hi Clayton" );
?>
</body>
</html>