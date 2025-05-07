<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Extraction</title>
</head>
<body>
    <h1>Form Data Extraction</h1>
    <form method="POST" action="">
        <label for="name">USERNAME:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="password">PASSWORD:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        echo "<h2>Form Data Received:</h2>";
        echo "Name: " . $name . "<br>";
        echo "password: " . $password . "<br>";
    }
    ?>
</body>
</html>