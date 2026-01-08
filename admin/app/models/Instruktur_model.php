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
                i.idInstruktur,
                i.namaDepan,
                i.namaBelakang,
                br.branch,
                st.status,
                -- Blackbelt data
                ld.levelDan
            FROM
                blackbeltmany as bbm
            LEFT JOIN
                instruktur as i ON bbm.idInstruktur_fkBlackBeltMany = i.idInstruktur
                -- Join with FK from instruktur table
            LEFT JOIN
                branch as br ON i.idBranch_fkInstruktur = br.idBranch
            LEFT JOIN
                status as st ON i.idStatus_fkInstruktur = st.idStatus

            -- Join with blackbelt table
            LEFT JOIN
                blackbelt as bb ON bbm.idBlackBelt_fkBlackBeltMany = bb.idBlackBelt
                -- Join with FK from blackbelt table
            LEFT JOIN
                leveldan as ld ON bb.idLevelDan_fkBlackBelt = ld.idLevelDan;
            ';

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getInstrukturDetail($idInstruktur) {
        // == Previously we use this query ==
        // $query = '
        //     SELECT
        //         i.idInstruktur,
        //         bbm.idBlackBeltMany,
        //         bbm.idInstruktur_fkBlackBeltMany,
        //         -- Instruktur Data
        //         i.namaDepan,
        //         i.namaBelakang,
        //         br.branch,
        //         st.status,
        //         -- Blackbelt data
        //         ld.levelDan
        //     FROM
        //         blackbeltmany as bbm
        //     LEFT JOIN
        //         instruktur as i ON bbm.idInstruktur_fkBlackBeltMany = i.idInstruktur
        //         -- Join with FK from instruktur table
        //     LEFT JOIN
        //         branch as br ON i.idBranch_fkInstruktur = br.idBranch
        //     LEFT JOIN
        //         status as st ON i.idStatus_fkInstruktur = st.idStatus
        //     -- Join with blackbelt table
        //     LEFT JOIN
        //         blackbelt as bb ON bbm.idBlackBelt_fkBlackBeltMany = bb.idBlackBelt
        //         -- Join with FK from blackbelt table
        //     LEFT JOIN
        //         leveldan as ld ON bb.idLevelDan_fkBlackBelt = ld.idLevelDan
        //     WHERE
        //         i.idInstruktur = :idInstruktur
        //     ';
            // previously was
            // WHERE
            //    bbm.idInstruktur_fkBlackBeltMany = :idInstruktur_fkBlackBeltMany      
        // ============================================

        // === This shows the instructor table, but with Level Dan shown by Group Concat. 1:n means one instructor acquires more than 2 blackbelts ===
        // $query = '
        //     SELECT
        //         i.idInstruktur,
        //         i.namaDepan,
        //         i.namaBelakang,
        //         i.prestasi,
        //         i.emailAddress,
        //         i.noTelp,
        //         i.foto,
        //         i.pesanTambahan,
        //         br.branch,
        //         st.status,
        //         GROUP_CONCAT(DISTINCT ld.levelDan ORDER BY ld.levelDan SEPARATOR ", ") as levelDans
        //     FROM
        //         instruktur as i
        //     LEFT JOIN
        //         branch as br ON i.idBranch_fkInstruktur = br.idBranch
        //     LEFT JOIN
        //         status as st ON i.idStatus_fkInstruktur = st.idStatus
        //     LEFT JOIN
        //         blackbeltmany as bbm ON i.idInstruktur = bbm.idInstruktur_fkBlackBeltMany
        //     LEFT JOIN
        //         blackbelt as bb ON bbm.idBlackBelt_fkBlackBeltMany = bb.idBlackBelt
        //     LEFT JOIN
        //         leveldan as ld ON bb.idLevelDan_fkBlackBelt = ld.idLevelDan
        //     WHERE
        //         i.idInstruktur = :idInstruktur
        //     GROUP BY
        //         i.idInstruktur
        //     ';

        // Untuk Data Tabel Instruktur
        $query = '
            SELECT
                i.idInstruktur,
                i.namaDepan,
                i.namaBelakang,
                i.prestasi,
                i.emailAddress,
                i.noTelp,
                i.foto,
                i.pesanTambahan,
                br.branch,
                br.provinsi,
                br.foto_lokasi,
                st.status
            FROM
                instruktur as i
            LEFT JOIN
                branch as br ON i.idBranch_fkInstruktur = br.idBranch
            LEFT JOIN
                status as st ON i.idStatus_fkInstruktur = st.idStatus
            WHERE
                i.idInstruktur = :idInstruktur
        ';
    
        $this->db->query($query);
        $this->db->bind(":idInstruktur", $idInstruktur);
        $instrukturData = $this->db->single();
    
        // Untuk data Black Belt
        $queryBlackBelts = '
            SELECT
                ld.levelDan,
                bb.nomorSertifikat,
                bb.dateIssued,
                bb.*
                -- Get all black belt columns if needed
            FROM
                blackbeltmany as bbm
            INNER JOIN
                blackbelt as bb ON bbm.idBlackBelt_fkBlackBeltMany = bb.idBlackBelt
                -- Connecting the blackbelt fk with the main pk
            INNER JOIN
                leveldan as ld ON bb.idLevelDan_fkBlackBelt = ld.idLevelDan
                -- Connecting the levelDan fk with the main pk
            WHERE
                bbm.idInstruktur_fkBlackBeltMany = :idInstruktur
            ORDER BY
                bb.dateIssued DESC, ld.levelDan
                -- Sort by date (newest first) or level
            ';
    
        $this->db->query($queryBlackBelts);
        $this->db->bind(":idInstruktur", $idInstruktur);
        $blackBelts = $this->db->resultSet();
        
        // Combine the data
        $instrukturData['blackBelts'] = $blackBelts;
        
        return $instrukturData;
    }
}