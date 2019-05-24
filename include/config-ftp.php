<?php
session_start();
if(!defined('ROOT_DIR')){
define('ROOT_DIR', '');
};
function getDb() {
    $dbname = "votregrapyimn";
    $user   = "votregrapyimn";
    $pass   = "Webdesigner95";
    try {
        $db = new PDO("mysql:host=votregrapyimn.mysql.db;dbname=$dbname;charset=utf8", $user, $pass);
    } catch(PDOException $e) {
        die($e->getMessage());
    }
    return $db;
}
?>