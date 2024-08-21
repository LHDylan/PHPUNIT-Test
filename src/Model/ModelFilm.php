<?php

namespace App\Model;

use App\DAO\DAO;

class ModelFilm
{
    /**
     * @var DAO
     */
    private $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    public function selectFilms()
    {

        $sql = "SELECT * FROM films";
        $result = $this->dao->requete($sql);

        if ($result === false) {
            return [];
        }

        $films = [];
        while ($row = $result->fetch_assoc()) {
            $films[] = $row;
        }

        return $films;


    }
}
