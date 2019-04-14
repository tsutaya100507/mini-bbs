<?php 
  try {
    $db = new PDO('mysql:dbname=mini_bbi;host=localhost;charset=utf8', 'root', 'root');
  } catch(PDOExeption $e) {
    print('DB接続エラー：' . $e->getMessaeg());
  }
?>