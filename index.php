<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Позиционирование</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="title">Заметки</div>
    <form method="post" action="display_notes.php">
        <div class="menu">
            <div class="name__menu">
                <label for="name" class="name">Название:</label>
                <input type="text" name="name" id="name" required> <br>
            </div>
            <div class="category__menu">
                <label for="category" class="category">Категория:</label>
                <select name="category" id="category" required>
                    <option value="Книга">Книга</option>
                    <option value="Мультфильм">Мультфильм</option>
                    <option value="Фильм">Фильм</option>
                </select>
            </div>
            <input type="submit" value="Добавить">
        </div>
    </form>
    <table class="table">
        <tr>
            <th>Название</th>
            <th>Категория</th>
        </tr>
        <?php include 'display_notes.php'; ?>
    </table>
    <script src="js/script.js"></script>
</body>

</html>