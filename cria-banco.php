<?php

$dpPath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dpPath");
$pdo->exec('CREATE TABLE videos (id INTEGER, url TEXT, title TEXT);');