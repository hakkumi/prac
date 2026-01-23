<?
$db = new PDO("mysql:host=localhost;dbname=workspace__s243;charset=utf8", "root","root");

$id = $_GET['id']??0;

$sql = "SELECT *  , date_format(date,'%d.%m.%Y' ) fmt from news WHERE id = ?";

$rs = $db->prepare($sql);

$rs->bindValue(1, $id, PDO::PARAM_INT);

$rs->execute();

$row = $rs->fetch();

if ($row) {?>
    <?= $row['fmt']?>><br>
    <?=$row['title']?><br>
    <?=$row['content']?><br>
    <img src='/images/<?=$row['image']?>'><?php
    
}else{?>
такой новости нет<br>
<?php
}
?>
<a href="/">Все новости</a>
