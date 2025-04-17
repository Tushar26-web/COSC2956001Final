<?php
$conn = new mysqli("localhost", "root", "", "final");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST['submit']) {
    $message = trim($_POST['message']);
    if (!empty($message)) {
        $stmt = $conn->prepare("INSERT INTO string_info (message) VALUES (?)");
        $stmt->bind_param("s", $message);
        $stmt->execute();
        echo "<p>✅ Message submitted successfully.</p>";
    } else {
        echo "<p>⚠️ Please enter a valid message.</p>";
    }
    echo "<a href='index.php'>← Back to Home</a>";
}

$conn->close();
?>
