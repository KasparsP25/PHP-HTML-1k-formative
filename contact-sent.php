<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
    echo("Your info has been saved!" . "<br>");
echo("Vārds: " . $_POST["fname"] . "<br>" . "e-pasts: " . $_POST["gmail"] . "<br>" . "Jūsu atsauksme: " . $_POST["rev"] . "<br>");

?>
<a href="contact.html"><button>Return</button></a>
</body>
</html>