<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    require_once "../DBC.php";
    require_once "../Signup.php";


    $signup = new Signup($name, $password);
    $signup->signup();
}
