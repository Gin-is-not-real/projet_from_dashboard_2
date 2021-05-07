<?php 
if(session_id() == '') {
    session_start();
}
$btn_connect = '<input class="round-super-btn visible-on-home" id="btn-connection" type="submit" name="action" value="LOG IN">';
$btn_register = '<input class="round-super-btn visible-on-home" id="btn-registration" type="submit" name="action" value="REGISTER">';
$btn_home = '<a href="accounts_index.php"><input class="round-super-btn visible-on-app" id="btn-home" type="submit" name="action" value="HOME"></a>';
$btn_deconnect = '<a href="accounts_index.php?action=deconnection"><input class="round-super-btn" id="btn-deconnection" type="submit" name="action" value="LOG OUT"></a>';
$btns = array();
?>

<div id="notice">
    <div>
        <?php 
            if(!isset($_SESSION['pseudo'])) {
                $_POST['log-notice'] = 'You must log in or register to access the application';

                // $_POST['log-notice'] = '<p>You must  ' . $btn_connect . '  or  '  . $btn_register . '  to access the application';

                array_push($btns, $btn_connect, $btn_register);
            }
            else {
                $_POST['r-notice'] = "You are logged in as <strong>" . $_SESSION['pseudo'] . "</strong>";
                $_POST['notification'] = 'Vous avez été correctement connecté en tant que <strong>' . $_SESSION['pseudo']  . "</strong>";

                // $_POST['log-notice'] = "You are logged in as <strong>" . $_SESSION['pseudo'] . "</strong>.";
                // array_push($btns, $btn_deconnect);
            }

            if(isset($_POST['log-notice'])) {
                echo $_POST['log-notice'] . '</br>';
            }


        ?>
    </div>
            <div id="div-btns">
                <?php
                    foreach($btns as $input) {
                        echo $input;
                    }
                ?>
            </div>

            <div id="div-notif">
                <?php
                    if(isset($_POST['notification'])) {
                        echo $_POST['notification'] .'</br>';
                    }
                ?>
            </div>

            <div id="div-error">
                <?php

                    if(isset($_POST['log-error'])) {
                        echo  $_POST['log-error'] .'</br>';
                    }
                ?>
            </div>

            <?php include_once('accounts.php'); ?>

</div>


<!-- <script type="text/javascript" src="../static/accountDisplay.js"></script> -->