<?php


$felhasznalonev= $_POST['felhasznalo'];

$jelszo= $_POST['jelszo'];

if($felhasznalonev && $jelszo)
{

$kapcsolodas = mysql_connect('localhost','root','','belepes');

$adatbazis = mysql_select_db('users',$kapcsolodas);
}


else
 die ("Kérlek ird be a felhasználó neved és a jelszavad");





?>