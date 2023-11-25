<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Позиционирование</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Заметки</h1>
    <form method="post" action="display_notes.php">
        <label for="name">Название:</label>
        <input type="text" name="name" id="name" required> <br>

        <label for="category">Категория:</label>
        <select name="category" id="category" required>
            <option value="Книга">Книга</option>
            <option value="Мультфильм">Мультфильм</option>
            <option value="Фильм">Фильм</option>
        </select> <br>
        
        <input type="submit" value="Добавить">
    </form>
    <table border="1">
        <tr>
            <th>Название</th>
            <th>Категория</th>
        </tr>
        <?php include 'display_notes.php'; ?>
    </table>
    <script src="js/script.js"></script>
</body>

</html>