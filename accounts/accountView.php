<?php session_start(); ?>

<!-- <link href="accounts/static/gam_style.css" rel="stylesheet" /> -->

<div id="notice">
    <?php 

        if(isset($_GET['visitor_location']) AND $_GET['visitor_location'] == 'accountView') {
/*
            if(isset($_GET['notice'])) {
                if($_GET['notice'] == 'pseudoNotAvailable') {
                    echo 'Pseudo déja pris' . '<br/>'; 
                }
                elseif($_GET['notice'] == 'wrongInputs') {
                echo 'Pseudo ou mot de passe incorrect !' . '<br/>';
                }  
                elseif($_GET['notice'] == 'wrongPassRepeat') {
                    echo 'Les mots de passe doivent être identiques' . '<br/>';
                }
            } */
            if(isset($_POST['notice'])) {
                echo $_POST['notice'];
            
            echo 'Entrez les informations demandées ou ' 
                . '<a href="../accounts/index.php">continuer en tant que visiteur</a>' . '<br/>';
            //#    
            }
    ?>

    <?php
    }
    elseif(isset($_SESSION['pseudo'])) {
    ?>
        <p>Vous êtes connecté(e) en tant que <strong><?= $_SESSION['pseudo'] ?></strong>.<a href="../accounts/index.php?action=deconnection">Se deconnecter</a></p>
        
    <?php
    }
    else {
    ?>
        <p>Vous devez vous 
            <input type="button" id="btn_connection" value="connecter"/>
            ou vous
            <input type="button" id="btn_registration" value="inscrire"/>
            pour acceder à toutes les fonctionnalités.
        </p>
        <p>Sinon vous pouvez 
            <a href="index.php"> continuer en tant que visiteur</a>
        </p>

    <?php
    }
    ?>

    <div id="form_connection" class="form_account">
        <h1>Connection</h1>
        <form action="../index.php?action=connection" method="post">
            <p>
                <a>Pseudo:</a> 
                <input type="text" class="form_textfield" name="pseudo" required autocomplete="off">
            </p>
            <p>
                <a>Mot de passe:</a>
                <input type="password" class="form_textfield" name="pass" required autocomplete="off">
            </p>
            <input type="submit" value="Se connecter">
        </form>
    </div>
</div>

    <div id="form_registration" class="form_account">
        <h1>Inscription</h1>
        <form action="../index.php?action=registration" method="post">

            <p>
                <a>Pseudo:</a> 
                <input type="text" class="form_textfield" name="reg_pseudo" value="" autocomplete="off" required >
            </p>
            <p>
                <a>Adresse email:</a>
                <input type="email" class="form_textfield" name="reg_mail" value="" autocmplete="off" required >
            </p>
            <p>
                <a>Mot de passe:</a>
                <input type="password" class="form_textfield" name="reg_pass" value="" autocomplete="off" required >
            </p>
            <p>
                <a>Repeter le Mot de passe:</a>
                <input type="password" class="form_textfield" name="reg_pass_repeat" autocomplete="off" required >
            </p>
            <input type="submit" value="S'enregistrer" >

        </form>
    </div>

</div>







<!-- 
            <table>
            <tr>
                <td><a>Pseudo:</a></td>
                <td><input type="text" class="form_textfield" name="reg_pseudo" value="" autocomplete="off" required ></td>
            </tr>
            <tr>
                <td><a>Adresse email:</a></td>
                <td><input type="email" class="form_textfield" name="reg_mail" value="" autocmplete="off" required ></td>
            </tr>
            <tr>
                <td><a>Mot de passe:</a></td>
                <td><input type="password" class="form_textfield" name="reg_pass" value="" autocomplete="off" required ></td>
            </tr>
            <tr>
                <td><a>Repeter le Mot de passe:</a></td>
                <td><input type="password" class="form_textfield" name="reg_pass_repeat" autocomplete="off" required ></td>
            </tr>
            </table>
            <input type="submit" value="S'enregistrer" >
        </div>
-->



<script type="text/javascript" src="../static/accountDisplay.js"></script>

