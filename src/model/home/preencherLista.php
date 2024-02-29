<?php
session_start();
$texto = (isset($_POST["texto"]) ? $_POST["texto"] : "");

$_SESSION['lista'] = [];

$_SESSION['lista'][]=[
   "texto" => $texto
];