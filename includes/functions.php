<?php
// Include the database configuration
include 'config/database.php';

// Function to get category name by ID
function getCategoryName($conn, $categoryId) {
    $sql = "SELECT name FROM Categories WHERE category_id = $categoryId";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['name'];
    } else {
        return "Unknown";
    }
}

// Function to truncate text to a specific length
function truncateText($text, $length) {
    if (strlen($text) > $length) {
        $text = substr($text, 0, $length) . '...';
    }
    return $text;
}
?>
