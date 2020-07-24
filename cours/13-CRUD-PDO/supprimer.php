<?php
require_once "functions/utils.php";

//a partir de l'url
$id = $_GET['id'];

//supprime ligne de la table

/** @var TYPE_NAME $mysql */

$result = mysqli_query($mysql, "DELETE FROM user WHERE id=$id");

//redirige vers index
header("Location:liste.php");

?>


