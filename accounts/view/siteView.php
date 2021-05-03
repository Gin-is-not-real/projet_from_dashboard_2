<?php
$title = 'Site'; 
require('../globals.php');

ob_start(); 

echo "realpath(): " . $GLOBALS['realpath'] .'<br/>';
echo "dirname(): " . $GLOBALS['dirname'] . '<br/>';
echo "basename(): " . $GLOBALS['basename'] . '<br/>';


$content = ob_get_clean();
require_once('template.php');
?>