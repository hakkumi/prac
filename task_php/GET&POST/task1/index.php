<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/mail.php" method ="$_POST"></form>
    
    <input type = "mail" name = "mail">
    <input type = "name" name = "name">
    <textarea>text</textarea>
    <input type = "submit" value = "отправить">отправить</button>

</form>
</body>

<?
if($_POST>0){
    echo "хочу сказать благодарю и гвоорю мерси";
    unset($_POST);
}
?>






</html>
