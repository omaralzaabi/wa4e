<html>
<head>
    <title>Omar Ashraf Alzaabi 2b2d77b5</title>
    <h1>Welcome to my guessing game</h1>
</head>
<body>
    <p>
    <?php

if (! isset($_GET['guess']) ) {
    echo("Missing guess parameter\n");
} else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
} else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
    } else if ( $_GET['guess'] < 48 ) {
    echo("Your guess is too low");
    } else if ( $_GET['guess'] > 48 ) {
    echo("Your guess is too high");
    } else {
    echo("Congratulations - You are right");
    }

?>
    </p>
</body>
</html>
