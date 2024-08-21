<?php
namespace App\system;

class Conf
{
    /**
     * Paramatres de la base de donnees
     * @var array
     */
    public static $bdd = array(
        'host' => "localhost",
        'user' => "root",
        'pass' => "root",
        'database' => "film",
        'port' => 3306
    );

    public static $templates = "templates/";

    public static $salt = "Ceci est moN Grian de Sel";

    public static $url = "https://www.prevision-meteo.ch/services/json/";
}