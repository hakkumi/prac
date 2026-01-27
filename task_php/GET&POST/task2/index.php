<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post">
    
        <input type = "number" name = "num1" required>

        <select name = "select">
            <option value="add">+</option>
            <option value="substract">-</option>
            <option value="multiply">*</option>
            <option value="devide">/</option>
        </select>

        <input type = "number" name = "num2" required>
        <button type = "submit" name = "calculate">посчитать</button>
</form>
</body>

<?

if(isset($_POST['calculate'])){
    $n1 =  $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['select'];
    $result = "";
    
    switch($op){
        case 'add':
            $result = $n1+$n2;
            break;
        case 'substract':
            $result = $n1-$n2;
            break;
        case 'multiply':
            $result = $n1*$n2;
            break;
        case 'devide':
            if($n2 !=0){
                $result = $n1/$n2;

            }else{
                $result = "на ноль делить нельзя";
            }
            break;
    }   
    echo "<h3>Результат: $result</h3>";
}

?>






</html>
