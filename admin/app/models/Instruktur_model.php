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

    public function tambahInstruktur($data) {
        $query = "
            INSERT INTO instruktur
                (namaDepan, namaBelakang, prestasi, emailAddress, noTelp, foto, pesanTambahan, idBranch_fkInstruktur, idStatus_fkInstruktur)
            VALUES
                (:namaDepan, :namaBelakang, :prestasi, :emailAddress, :noTelp, :foto, :pesanTambahan, :idBranch_fkInstruktur, :idStatus_fkInstruktur)
        ";

        $this->db->query($query);
        // Bind semua parameter
        $this->db->bind(':namaDepan', $data['namaDepan']);
        $this->db->bind(':namaBelakang', $data['namaBelakang']);
        $this->db->bind(':prestasi', $data['prestasi']);
        $this->db->bind(':emailAddress', $data['emailAddress']);
        $this->db->bind(':noTelp', $data['noTelp']);
        $this->db->bind(':foto', $data['foto']);
        $this->db->bind(':pesanTambahan', $data['pesanTambahan']);
        $this->db->bind(':idBranch_fkInstruktur', $data['idBranch_fkInstruktur']);
        $this->db->bind(':idStatus_fkInstruktur', $data['idStatus_fkInstruktur']);

        $this->db->execute();

        // Kembalikan ID yang baru dibuat
        $idInstruktur = $this->db->lastInsertID(); // Simpan ID Instruktur

        // QUERY 2: table blackbelt
        $query2 = "
            INSERT INTO blackbelt
                (nomorSertifikat, dateIssued, idLevelDan_fkBlackBelt)
            VALUES
                (:nomorSertifikat, :dateIssued, :idLevelDan_fkBlackBelt)
        ";

        $this->db->query($query2);
        // Bind this
        $this->db->bind(":nomorSertifikat", $data['nomorSertifikat']);
        $this->db->bind(":dateIssued", $data['dateIssued']);
        $this->db->bind(":idLevelDan_fkBlackBelt", $data['idLevelDan_fkBlackBelt']);
        $this->db->execute();
        $idBlackBelt = $this->db->lastInsertID(); // Simpan ID blackbelt

        // QUERY 3: table blackbeltmany
        $query3 = "
            INSERT INTO blackbeltmany
                (idInstruktur_fkBlackBeltMany, idBlackBelt_fkBlackBeltMany)
            VALUES
                (:idInstruktur_fkBlackBeltMany, :idBlackBelt_fkBlackBeltMany)
        ";

        $this->db->query($query3);
        // Bind this
        $this->db->bind(":idInstruktur_fkBlackBeltMany",$idInstruktur);
        $this->db->bind(":idBlackBelt_fkBlackBeltMany", $idBlackBelt);
        $this->db->execute();
        
        return $idInstruktur; // Kembalikan ID Instruktur
    }
    
    // Showing the Dropdown Branch and Status in Add Instructor Form
    public function getBranchList() {
        $query = "
            SELECT idBranch, branch FROM branch
        ";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getStatusList() {
        $query = "
            SELECT idStatus, status FROM status
        ";

        $this->db->query($query);
        return $this->db->resultSet();
    }
    // Showing the Dropdown levelDan in Add Instructor Form on Blackbelt session
    public function getLevelDanList() {
        $query = "
            SELECT idLevelDan, levelDan FROM leveldan
        ";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function deleteInstruktur($idInstruktur) {
        // Delete instruktur, tapi seluruh blackbelt terkaitnya ikut dihapus juga
        // 1. Ambil dulu id blackbelt yang terkait
        $query = "
            SELECT idBlackBelt_fkBlackBeltMany FROM blackbeltmany
            WHERE idInstruktur_fkBlackBeltMany = :idInstruktur
        ";
        $this->db->query($query);
        $this->db->bind(':idInstruktur', $idInstruktur);
        $blackBeltIds = $this->db->resultSet(); // Menangkap banyak (yg terpaut dgn idInstruktur)
    
        // 2. Delete dari junction table
        $query1 = "
            DELETE FROM blackbeltmany WHERE idInstruktur_fkBlackBeltMany = :idInstruktur
        ";
        $this->db->query($query1);
        $this->db->bind(':idInstruktur', $idInstruktur);
        $this->db->execute();

        // 3. Delete blackbelt yang terkait
        foreach($blackBeltIds as $blackBeltId) {
            $query2 = "
                DELETE FROM blackbelt WHERE idBlackBelt = :idBlackBelt_fkBlackBeltMany;
            ";
            $this->db->query($query2);
            $this->db->bind(":idBlackBelt_fkBlackBeltMany", $blackBeltId['idBlackBelt_fkBlackBeltMany']);
            $this->db->execute();
        }

        // 4. Delete instruktur
        $query3 = "
            DELETE FROM instruktur WHERE idInstruktur = :idInstruktur
        ";
        $this->db->query($query3);
        $this->db->bind(":idInstruktur", $idInstruktur);
        $this->db->execute();

        return $this->db->rowCount();
    }
}