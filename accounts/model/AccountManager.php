<?php
require_once('globals.php');
require_once('DatabaseManager.php');

class AccountManager extends DatabaseManager{
    public function init() {
        $this->initDatabase();
        $this->initTable();
    }

    public function getLogs($pseudo) {
        $db = $this->dbConnect();

        $req = $db->prepare("SELECT pseudo, pass FROM $this->tabname WHERE pseudo = :pseudo");
        $req->execute(array('pseudo' => $pseudo));

        return $req;
    }

    public function insertLogs($pseudo, $mail, $pass) {
        $db = $this->dbConnect();

        $req = $db->prepare("INSERT INTO $this->tabname(pseudo, mail, pass) VALUES(:pseudo, :mail, :pass)");
        $affectedLine = $req->execute(array(
            'pseudo' => $pseudo,
            'mail' => $mail,
            'pass' => $pass
        ));

        return $affectedLine;
    }

}
?>