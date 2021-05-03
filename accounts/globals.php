<?php
/*
    renseigner ici les informations concernant le site et le serveur
*/
$GLOBALS['sitename'] = "account";
// $GLOBALS['sitepath'] = "view/siteView.php";
$GLOBALS['sitepath'] = "../view/applicationView.php";


$GLOBALS['servername'] = "localhost";
$GLOBALS['username'] = "admin";
$GLOBALS['password'] = "admin";

$GLOBALS['dbname'] = $GLOBALS['sitename'] . "_gam";
$GLOBALS['tabname'] = 'accounts_gam';


$path = getcwd();
$GLOBALS['dirname'] = dirname($path);
$GLOBALS['basename'] = basename($path);
$GLOBALS['realpath'] = realpath($path);


?>