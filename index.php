<?php
$dsn = 'mysql:dbname=user;host=127.0.0.1;';
$user = 'ubuntumysqlnnaoya';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = "select * from user"
    $result = $dbh->query($sql);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>

<!DOCTYPE HTML>
<head>
    <title>LAMP SAMPLE PAGE</title>
</head>
<body>
<div class="container">
    <?php foreach()($result as $value){
        echo "<h1>$value[id] $value[name] $value[age]</h1>";
    }?>
</div>
</body>
