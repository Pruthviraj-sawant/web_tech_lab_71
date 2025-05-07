<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session and Cookie Demo</title>
</head>
<body>
    <h1>Save and Access Data Using Session and Cookies</h1>
    <?php
    session_start();

    // Handle session form submission
    if (isset($_POST['save_session'])) {
        $_SESSION['user_note'] = $_POST['note_input'];
        echo "<p>Data saved in session!</p>";
    }

    // Handle cookie form submission
    if (isset($_POST['save_cookie'])) {
        setcookie('user_pref', $_POST['pref_input'], time() + 3600, "/"); // valid for 1 hour
        echo "<p>Data saved in cookies!</p>";
    }
    ?>

    <form method="post">
        <h2>Session Storage</h2>
        <label for="note_input">Note to Store:</label>
        <input type="text" id="note_input" name="note_input" required>
        <button type="submit" name="save_session">Save to Session</button>
    </form>

    <form method="post">
        <h2>Cookie Storage</h2>
        <label for="pref_input">Preference to Store:</label>
        <input type="text" id="pref_input" name="pref_input" required>
        <button type="submit" name="save_cookie">Save to Cookie</button>
    </form>

    <h2>View Stored Information</h2>
    <?php
    // Display session info
    if (isset($_SESSION['user_note'])) {
        echo "<p>Stored Note (Session): " . htmlspecialchars($_SESSION['user_note']) . "</p>";
    } else {
        echo "<p>No note found in session.</p>";
    }

    // Display cookie info
    if (isset($_COOKIE['user_pref'])) {
        echo "<p>Stored Preference (Cookie): " . htmlspecialchars($_COOKIE['user_pref']) . "</p>";
    } else {
        echo "<p>No preference found in cookie.</p>";
    }
    ?>
</body>
</html>
