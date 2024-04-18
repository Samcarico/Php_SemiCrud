<?php

if (isset($_POST["DeleteAll"])) {
    session_start();
    $_SESSION["personas"] = array();
} elseif(isset($_POST["DeleteOne"])) {
    session_start();
    $id = $_POST["DeleteOne"];
    unset($_SESSION["personas"][$id]);
}

header("location: ../index.php");
