<?php
include("../modelo/persona.php");

function create() {

    session_start();

    if (!isset($_SESSION["personas"])) $_SESSION["personas"] = array();

    $Persona = new Persona($_POST["nombre"], $_POST["apellido"], $_POST["cedula"], $_POST["edad"]);
    $array = $_SESSION["personas"];

    array_push($array, $Persona->jsonSerialize());
    

    $_SESSION["personas"] = $array;
    header("location: ../index.php");
}

$text = null;
$result = match (true) {
   empty($_POST["nombre"]) => $text = "Nombre vacio",
   empty($_POST["apellido"]) => $text = "Apellido esta vacio",
   empty($_POST["cedula"]) => $text = "La cédula vacio",
   empty($_POST["edad"]) => $text = "edad esta vacia",
   default => create()
}; 

if ($text) echo "<script language='javascript'>alert('$text');</script>";
