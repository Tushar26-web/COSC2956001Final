<?php include('includes/header.php'); ?>

<form method="POST" action="delete.php">
    <label for="string_id">Delete by string_id:</label>
    <input type="number" name="string_id" id="string_id" required>
    <input type="submit" value="Delete">
</form>

<div class="records">
    <h2>All Records</h2>
    <?php
    $conn = new mysqli("localhost", "root", "", "final");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM string_info");

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='record'>ID: <strong>" . $row["string_id"] . "</strong> | Message: " . htmlspecialchars($row["message"]) . "</div>";
        }
    } else {
        echo "<p>No records found.</p>";
    }

    $conn->close();
    ?>
</div>

<a href="index.php">← Back to Home</a>

</body>
</html>
