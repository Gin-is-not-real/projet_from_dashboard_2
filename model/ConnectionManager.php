<?php
require_once('./globals.php');

class ConnectionManager {
    public $basename;
    public $tablename;

    public function __construct() {
        $this->basename = $GLOBALS['basename'];
        $this->tablename = $GLOBALS['tablename'];
    }

    public function connectServer() {
        try {
            $db = new PDO("mysql:host=localhost", $GLOBALS['username'], $GLOBALS['password']);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur connect server: ' . $e->getMessage());
        }
        //#echo 'connection au serveur' . '<br/>';
        return $db;
    }

    protected function connectBase() {
        try {
            $pdoConnect = new PDO("mysql:host=" . $GLOBALS['servername'] . ";dbname=" . $this->basename . ";charset=utf8", $GLOBALS['username'], $GLOBALS['password'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur connect base: ' . $e->getMessage());
        }
        // echo "connected with database \"" . $GLOBALS['basename'] . '"</br>';
        // echo "connect base: " . $GLOBALS['msg_connect_ok'];
        return $pdoConnect;
    }

    function checkTable() {
        $serv = $this->connectServer();
        $tabname = $this->tablename;
        $req = $serv->query("SELECT count(*) as s FROM information_schema.tables WHERE table_schema = " . $this->basename . "AND table_name =" . $tabname);
    
        if($req->fetch()['s'] > 0) {
            return true;
        }
        else {
            return false;
        }
    }

    private function createBase() {
        $serv = $this->connectServer();
        $req = "CREATE DATABASE IF NOT EXISTS $this->basename";
        $serv->exec($req);  
    }

    private function createTable() {
        $db = $this->connectBase();
        $req = "CREATE TABLE IF NOT EXISTS $this->tablename({$GLOBALS['fields']})";
        $db->exec($req);
    }






}

