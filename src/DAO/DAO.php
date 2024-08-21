<?php

namespace App\DAO;

use mysqli;
use Exception;
use App\system\Conf;

class DAO
{

    private $mysqli;

    function __construct()
    {
        
        $this->mysqli = new mysqli(Conf::$bdd['host'], Conf::$bdd['user'], Conf::$bdd['pass'], Conf::$bdd['database']);
    }

    function requete($sql)
    {

        try {
            return $this->mysqli->query($sql);
        } catch (Exception) {
            return false;
        }
    }
}