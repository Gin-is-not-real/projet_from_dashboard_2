<?php
require('controller/accountController.php');
require_once('controller/frontController.php');

try {
    if(!isset($_GET['action'])) {
        goToHomeView();
    }
    else {

        if($_GET['action'] == 'connection') {
            if(!empty($_POST['pseudo']) && !empty($_POST['pass'])) {
                connection($_POST['pseudo'], $_POST['pass']);
            }
            else {
                throw new Exception('Tout les champs ne sont pas remplis !');
            }
        }

        elseif($_GET['action'] == 'registration') {
            if(!empty($_POST['reg_pseudo'])) {
                registration($_POST['reg_pseudo'], $_POST['reg_mail'], $_POST['reg_pass'], $_POST['reg_pass_repeat']);
            }
            else {
                throw new Exception('Veuillez renseigner un pseudo !');
            }
        }

        elseif($_GET['action'] == 'deconnection') {
            deconnection();
        } 
    }

    goToSite();

} catch(Exception $e) {
    echo 'Erreur: ' . $e->getMessage();
}


?>