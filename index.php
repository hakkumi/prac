<?
$db = new PDO("mysql:host=localhost;dbname=workspace__s243;charset=utf8", "root","root");

$page = $_GET['page'] ?? 1;

$limit = 4;

$offset = ($page-1)*$limit;

$rs = $db->query("SELECT COUNT(*) total FROM news");
$row = $rs->fetch();
$total = $row['total'];

$pages= ceil($total / $limit);

$sql = "SELECT *  , date_format(date,'%d.%m.%Y' ) fmt from news order by 'date' limit ? offset ?" ;
$rs = $db->prepare($sql);
$rs->bindValue(1, $limit, PDO::PARAM_INT);
$rs->bindValue(2, $offset, PDO::PARAM_INT);
$rs->execute();
?>

<?include("menu.php");?>

        <main>
            <h2 class="main-title">Новости</h2>
            
            <div class="news">
                <?
            while($row = $rs->fetch()){
                ?>
                <div class="news-item">
                    <div class="news-date"><?=$row['fmt']?></div>
                    <a href="/news.php?id=<?=$row['id']?>" class="news-title"><?=$row['title']?></a>
                    <div class="news-text"><?=$row['announce']?>
                    </div>
                <?
            }
            
            for($p=1;$p<=$pages;$p++){
                ?>
                <a href = "/index.php?page=<?=$p?>"><?=$p?></a>
            <?}
            ?>
                </div>
            </div>
        </main>

        <?include("footer.php")?>
    </div>
</body>
</html>


