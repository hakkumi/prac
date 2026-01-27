<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" min='8' max='32' name="length" value="12" required><br><br>

        <input type="checkbox" name="nums" id="n">
        <label for="n">цифры</label><br>

        <input type="checkbox" name="symb" id="s">
        <label for="s">специальные символы</label><br>

        <input type="checkbox" name="up" id="u">
        <label for="u">заглавные буквы</label><br><br>

        <button type="submit" name="generate">сгенерировать</button>
    </form>

    <?php
    if (isset($_POST['generate'])) {
        $length = (int)$_POST['length'];
        $chars = 'abcdefghijklmnopqrstuvwxyz'; 
        
        if (isset($_POST['up'])) {
            $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if (isset($_POST['nums'])) {
            $chars .= '0123456789';
        }
        if (isset($_POST['symb'])) {
            $chars .= '!@#$%^&*()-_=+[]{}';
        }

        $password = '';
        $charLength = strlen($chars);

        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, $charLength - 1)];
        }

        echo "<div class='result'>Ваш пароль: <code>" . htmlspecialchars($password) . "</code></div>";
    }
    ?>
</body>
</html>
