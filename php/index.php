<?php
// index.php
include __DIR__ . '/db.php'; // Використовуйте __DIR__, щоб вказати шлях до db.php

// Ваш код, наприклад, виконання запиту до бази даних
$sql = "SELECT * FROM your_table"; // Замість your_table вставте вашу таблицю
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Виводимо дані кожного рядка
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>"; // Замість id та name вставте ваші поля
    }
} else {
    echo "0 results";
}

// Закриваємо з'єднання
$conn->close();

//echo "Current directory: " . __DIR__ . "<br>";
//echo "Files: " . implode(", ", scandir(__DIR__));
echo '<br>I am PHP';
?>
