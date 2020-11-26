<?php


namespace App;


class DBConnector
{
    public function __invoke() {
        //host needs to be 127 instead of localhost, but why?
        $db = new \PDO('mysql:host=127.0.0.1;dbname=todo','root', 'password');
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        // this makes PDO give error messages if it has issues trying to update the db, otherwise it would fail silently
        $db->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
        return $db;
    }
}