<?php
require_once('globals.php');

function goToHomeView() {
    // header('Location: view/homeView.php?visitor_location=home');
    require('view/homeView.php');
    exit();
}

function goToApplicationView() {
    // header('Location: view/applicationView.php?visitor_location=application');

    header('Location: view/applicationView.php?action=cancel-edit;visitor_location=application');

    exit();
}
