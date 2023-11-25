<?php
$host = "localhost";
$username = "root";
$password = "mysql";
$database = "test";
$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];

    $query = 'INSERT INTO notes (name, category) VALUES (?, ?)';
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss', $name, $category);

    if($stmt->execute()) {
        header('Location: index.php');
        exit();
    } else {
        echo 'Ошибка при добавлении заметки: ' . $stmt->error;
    }

    $stmt->close();
}

$query = 'SELECT name, category FROM notes';
$result = $mysqli->query($query);
?>

<?php 

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['category'] . '</td>';
        echo '</tr>';
    }

    $result->free();
} else {
    echo 'Ошибка выполнения запроса: ' . $mysqli->error;
}
?>

<?php
$mysqli->close();
?>