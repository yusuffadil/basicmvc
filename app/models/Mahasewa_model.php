<?php

class Mahasewa_model {
    private $table = 'mahasewa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    

    public function getAllMahasewa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllMahasewaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasewa($data) {
        $query = "INSERT INTO mahasewa 
                    VALUES 
                ('', :nama, :nik, :email, :pekerjaan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasewa($id) {
        $query = "DELETE FROM mahasewa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}