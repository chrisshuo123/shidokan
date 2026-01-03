<?php

class Dojo_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getDojoList() {
        $query = '
            SELECT namaDojo, alamatDojo, foto FROM
            dojo
        ';

        $this->db->query($query);
        return $this->db->resultSet();
    }
}