<?php
try{
$pdo = new pdo('mysql:host=localhost;dbname=estoque','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET CHARACTER SET utf8");
}catch(PDOException $error){
    echo 'Error'.$error->getMessage();

}

?>