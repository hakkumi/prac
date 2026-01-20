<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Наша компания</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Наша компания</h1>
            
            <nav>
                <?php 
                    include("menuarr.php");
                    foreach($menu as $i){?>
                    <a href= "<?=$i['link']?>"><?=$i['text']?></a>;
                    <?};
                    ?>
                    
            </nav>
        </header>

        <hr>
