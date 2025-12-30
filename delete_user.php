<?php

require "../config.php";

$id = $_GET['id'];

$q = "DELETE FROM somlalit_user WHERE user_id = $id";
mysqli_query($conn, $q);
header("Location: ../nij/index.php");
exit();