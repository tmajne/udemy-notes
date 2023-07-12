<?php

echo "bar";

if(isset($_COOKIE['myCookie'])){
    $value = $_COOKIE['myCookie'];
    echo "Wartość ciastka: " . $value;
} else {
    echo "Ciastko o podanej nazwie nie istnieje.";
    setcookie("myCookie", "some value", time() + 3600);
}