<?php
    $profilManager = new ProfilManager(getDb());
    $avisManager = new AvisManager(getDb());

    $userCount = $profilManager->getRegisteredCount();
    $dateLastMessage = $avisManager->getDateLastMessage();
    $numberAvis = $avisManager->getCountAvis();

    $avisManager = new AvisManager(getDb());
    $avisList = $avisManager->getReporting();

?>