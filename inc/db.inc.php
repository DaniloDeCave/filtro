<?php

DEFINE('HOST','localhost');
DEFINE('DB','my_db');
DEFINE('USER','root');
DEFINE('PASS','');

$link = new mysqli(HOST,USER,PASS,DB);

if(!$link){
    echo "errore";
}