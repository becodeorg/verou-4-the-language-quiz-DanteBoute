<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Translation Quiz</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <h1>Translation Quiz</h1>

    <form action="index.php" method="post">
        <label for="translation">Translate the word:</label>

        <?php
        // Display the current word
		if(!empty($_SESSION["RANDOM_WORD"]))
        echo $_SESSION["RANDOM_WORD"]->getOriginal();
        ?>

        <input type="text" id="translation" name="translation" required>
		<?php echo "<p>". $_SESSION["OUTCOME"]. "</p>" ?>

        <input type="submit" value="Submit">
    </form>

</body>
</html>