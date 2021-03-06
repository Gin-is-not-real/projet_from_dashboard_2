<?php
require_once('model/AccountManager.php');

session_start();

function goToSite() {
    header('Location: ' . $GLOBALS['sitepath'] . '?visitor_location=site');
}

function initialize() {
    $accManager = new AccountManager();
    $accManager->init();
}

function deconnection() {
    $_SESSION['pseudo'] = array();
    session_destroy();

    goToSite();
}

function connection($pseudo, $pass) {
    $accountManager = new AccountManager();
    $logsDb = $accountManager->getLogs($pseudo);

    if($data = $logsDb->fetch()) {
        if($pass == $data['pass']) {
            $_SESSION['pseudo'] = $pseudo;

            // goToSite();
        }    
        else {    
            $_POST['notice'] = 'Les mots de passe doivent être identiques';

            // header('Location: view/accountView.php?notice=wrongInputs&visitor_location=accountView');

        }
    }
    else { 
        $_POST['notice'] = 'Pseudo ou mot de passe incorrect !';

        // header('Location: view/accountView.php?notice=wrongInputs&visitor_location=accountView');
    }       
}

function registration($pseudo, $mail, $pass, $pass_repeat) {
    $accountManager = new AccountManager();
    $logsDb = $accountManager->getLogs($pseudo);

    if($pass != $pass_repeat) {

        $_POST['notice'] = 'Les mots de passe doivent être identiques';
        // header('Location: view/accountView.php?notice=wrongPassRepeat&visitor_location=accountView');
    }
    elseif($data = $logsDb->fetch()) {
       

        $_POST['notice'] = 'Pseudo déja pris';
        // header('Location: view/accountView.php?notice=pseudoNotAvailable&visitor_location=accountView');   
    }
    else {
        $accountManager->insertLogs($pseudo, $mail, $pass);

        //header("Location: view/siteView.php");       
        $_SESSION['pseudo'] = $pseudo;      
    }
    goToSite();
}

