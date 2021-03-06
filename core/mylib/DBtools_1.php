<?php
/**
 * Created by PhpStorm.
 * User: Nicholas
 * Date: 2018/10/26
 * Time: 上午1:24
 */
require 'database.php';

function getAll(){
    $db = new myDatabase();
    $mysql = $db->database;
    $article = $mysql->query(
        "SELECT id, url FROM article where type='fangchan'"
    )->fetchAll();
    return $article;
}

function updateALL($id, $url){
    $db = new myDatabase();
    $mysql = $db->database;
    $article = $mysql->query(
        "update article set url=:url where id=:id", [':url'=>$url, ':id'=>$id]
    );
}

$urls = getAll();
foreach ($urls as $x){
    $target = str_ireplace('bbs','fangchan',$x[1]);
    echo $target;
    echo chr(10);
    updateALL($x[0],$target);
}

