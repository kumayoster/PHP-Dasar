<?php
$username = "admin";
$password = "qwerty";

if ($username=="admin" AND $password=="qwerty"){
    echo "Nama dan Password sesuai, hak akses diberikan..";
}
else
if ($username=="admin" AND $password !="qwerty"){
    echo "Nama sesuai, password tidak seusai!";
}
else
if($username!="admin" AND $password=="qwerty"){
    echo "Nama tidak sesuai, password sesuai!";
}
else{
    echo "Nama dan Password tidak sesuai";
}
?>