<?php

$dbname = "votregrapyimn";
$user   = "votregrapyimn";
$pass   = "Webdesigner95";
try {
    $db = new PDO("mysql:host=votregrapyimn.mysql.db;dbname=$dbname;charset=utf8", $user, $pass);
} catch(PDOException $e) {
    die($e->getMessage());
}

if(isset($_POST['idAvis'])) {
    $idAvis = $_POST['idAvis'];
    $req = $db->prepare('DELETE FROM avis WHERE id = :id');
    $req->execute(array('id' => $idAvis));

    echo json_encode($idAvis);
}

if(isset($_POST['idSign'])) {
    $idSign = $_POST['idSign'];
    $req = $db->prepare('UPDATE avis SET reporting = 1 WHERE id = :id');
    $req->execute(array('id' => $idSign));

    echo json_encode($idSign);
}

if(isset($_POST['deleteAvisId'])) {
    $idAvis = $_POST['deleteAvisId'];
    $req = $db->prepare('DELETE FROM avis WHERE id = :id');
    $req->execute(array('id' => $idAvis));

    echo json_encode($idAvis);
}

if(isset($_POST['valideAvisId'])) {
    $idSign = $_POST['valideAvisId'];
    $req = $db->prepare('UPDATE avis SET reporting = 0 WHERE id = :id');
    $req->execute(array('id' => $idSign));

    echo json_encode($idSign);
}

?>