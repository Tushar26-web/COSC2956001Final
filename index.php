<?php include('includes/header.php'); ?>

<form action="submit.php" method="POST">
    <label for="message">Enter a message:</label>
    <input type="text" name="message" id="message" placeholder="Type something..." maxlength="50" required>
    <input type="submit" name="submit" value="Submit">
</form>

<a href="showAll.php">📄 Show all records</a>

</body>
</html>
