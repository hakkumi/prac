<?php // task 1.2
$number = 12345;
$numberString = (string)$number;

echo "\n";
for ($i = -1; $i >= -strlen($numberString); $i--) {
    echo $numberString[$i];
}
echo "\n";
?>

<?php // task 1.1
$min = 1;
$max = 100;
$count = 10;

$random_numbers = [];

for ($i = 0; $i < $count; $i++) {
    $random_numbers[] = mt_rand($min, $max);
}

print_r($random_numbers);
?>

<?php // task 1.3
$array = [11, 22, 33, 44, 55, 67];

$chunks = array_chunk($array, 2);

foreach ($chunks as $chunk) {
    print_r($chunk);
}
?>

<?php //task 1.4
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$result = array_merge($arr1, $arr2);

print_r($result);
?>

<?php //task 2.4(1)
$str = "d223";
$position = -1;

for ($i = 0; $i < strlen($str); $i++) {
    if (is_numeric($str[$i])) {
        $position = $i;
        break;
    }
}
echo $position;

?>

<?php //task 2.4(2)
$keys = ['name', 'age', 'city'];
$values = ['boba', 30, 'myrino'];

echo json_encode($keys, JSON_PRETTY_PRINT) . "\n";
echo json_encode($values, JSON_PRETTY_PRINT);

?>

<?php //task 2.4(3)
$number = 2468135;

$digits = str_split((string)$number);

$evenCount = count(array_filter($digits, fn($d) => $d % 2 === 0));

echo "Исходное число: $number\n";
echo "Количество четных цифр: " . json_encode($evenCount);

?>

<?php //task 2.4(4)
$str = 'abcde';
$result = '';

foreach (str_split($str) as $index => $char) {
    $result .= ($index % 2 === 0) ? mb_strtoupper($char) : $char;
}

echo json_encode($result, JSON_UNESCAPED_UNICODE); 
?>

<?php //task 2.4(5)
$str = 'aaa bbb ccc';

$result = ucwords($str);

echo json_encode($result);
?>

<?php //task 2.5(1)
$str = '023m0df0dfg0'; 
$positions = [];

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] === '0') {
        $positions[] = $i;
    }
}

print_r($positions);
?>

<?php //task 2.5(2)
$str = 'abcdefg';
$result = '';

for ($i = 0; $i < strlen($str); $i++) {
    if (($i + 1) % 3 !== 0) {
        $result .= $str[$i];
    }
}

echo $result;
?>

<?php //task 2.5(3)
$arr = [1, 2, 3, 4, 5, 6];

$evenSum = 0;
$oddSum = 0;

foreach ($arr as $i => $value) {
    if ($i % 2 === 0) {
        $evenSum += $value;
    } else {
        $oddSum += $value;
    }
}

$result = $evenSum / $oddSum;

echo $result;
?>

<?php //task 3.6(1)
$arr = [5, 12, 999, 1000, 45, 1234, 7, 321];

$result = array_filter($arr, function($num) {
    return strlen((string)$num) <= 3;
});

print_r(array_values($result));
?>

<?php //task 3.6(2)
$num = 12345;
$str = (string)$num;

$allGreaterThanZero = true;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] === '0') {
        $allGreaterThanZero = false;
        break;
    }
}

var_dump($allGreaterThanZero);
?>

<?php //task 3.6(3)
$arr = [123, 456, 789];
$result = [];

foreach ($arr as $num) {
    $digits = str_split((string)$num);
    $result = array_merge($result, $digits);
}

print_r($result);
?>

<?php //task 3.10(1)
$arr = [1, 2, 3, 4];
$result = [];

foreach ($arr as $item) {
    $result[] = $item;
    $result[] = $item;
}

print_r($result);
?>

<?php //task 3.10(2)
$arr = [1, 2, 3, 4, 5, 6, 12];
$num = 12;

$result = array_filter($arr, function($item) use ($num) {
    return $num % $item === 0;
});

print_r(array_values($result));
?>

<?php //task 3.10(3)
$a = 123456;
$b = 345890;

$digitsA = str_split((string)$a);
$digitsB = str_split((string)$b);

$result = array_values(array_unique(array_intersect($digitsA, $digitsB)));

print_r($result);
?>

<?php //task 3.10(4)
$num = 33123343;
$str = (string)$num;

$positions = [];

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] === '3') {
        $positions[] = $i;
    }
}

if (count($positions) > 2) {
    $positions = array_slice($positions, 1, -1);
} else {
    $positions = [];
}

print_r($positions);
?>

<?php //task 3.10(5)
$arr = [12, 33, 456, 787, 901, 989, 123, 455];
$result = [];

foreach ($arr as $num) {
    $digits = str_split((string)$num);
    if (count($digits) === count(array_unique($digits))) {
        $result[] = $num;
    }
}

print_r($result);
?>

<?php //task 3.10(6)
$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$result = [];

foreach ($arr as $sub) {
    $result = array_merge($result, $sub);
}

print_r($result);
?>
