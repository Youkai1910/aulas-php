<?php 
const BASE = "/site/";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site usando PHP</title>
</head>
<body>
    <header>
        <h1>Site com PHP</h1>
        <nav>
            <a href="<?= BASE ?>index.php">Home</a>
            <a href="<?= BASE ?>cursos.php">Cursos</a>
            <a href="<?= BASE ?>duvidas.php">Duvidas</a>
            <a href="<?= BASE ?>planos.php">Planos</a>
            <a href="<?= BASE ?>consultoria.php">Consultoria</a>
        </nav>
    </header>
    <main>