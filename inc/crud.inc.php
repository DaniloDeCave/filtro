<?php
include 'db.inc.php';

function getAllCourses($table){

    global $link;

    $allCourses = array();

    $sql = "SELECT * FROM ".$table;

    $query = $link->query($sql);

    $result = $query->fetch_all();

    foreach($result as $row){
        
        $key = array_keys($row);
        $allCourses[$row[$key[0]]]=$row[$key[1]];
    }

    return $allCourses;

}


print_r(getAllCourses('courses'));
