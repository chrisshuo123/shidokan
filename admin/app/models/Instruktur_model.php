<?php

class Instruktur_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInstrukturList() {
        $query = '
            SELECT
                bbm.idBlackBeltMany,
                -- Instruktur Data
                i.namaDepan,
                i.namaBelakang,
                br.branch,
                st.status,
                -- Blackbelt data
                ld.levelDan
            FROM
                blackbeltmany as bbm
            LEFT JOIN
                instruktur as i ON bbm.fk_idInstruktur = i.idInstruktur
                -- Join with FK from instruktur table
            LEFT JOIN
                branch as br ON i.fk_idBranch = br.idBranch
            LEFT JOIN
                status as st ON i.fk_idStatus = st.idStatus

            -- Join with blackbelt table
            LEFT JOIN
                blackbelt as bb ON bbm.fk_idBlackBelt = bb.idBlackBelt
                -- Join with FK from blackbelt table
            LEFT JOIN
                leveldan as ld ON bb.fk_idLevelDan = ld.idLevelDan;
            ';

        $this->db->query($query);
        return $this->db->resultSet();
    }
}