<?php
$conn = new mysqli("localhost", "root", "", "final");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST['string_id']) {
    $id = $_POST['string_id'];
    $stmt = $conn->prepare("DELETE FROM string_info WHERE string_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<p>✅ Record with ID $id deleted.</p>";
    } else {
        echo "<p>⚠️ No record found with ID $id.</p>";
    }

    echo "<a href='showAll.php'>← Back to records</a>";
}

$conn->close();
?>
