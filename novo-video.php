<?php


$dpPath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dpPath");

$sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_POST['url']);
$stmt->bindValue(2, $_POST['title']);

if ($stmt->execute() === false) {
    header('Location: index.php?success=0');
}else{
    header('Location: index.php?success=1');
}