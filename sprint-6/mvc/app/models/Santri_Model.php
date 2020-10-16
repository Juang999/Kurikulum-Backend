<?php

class Santri_Model
{
    private $table = 'Daftar_Santri';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllSantri(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSantriById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataSantri($data){
        $query = "INSERT INTO Daftar_Santri(Nama, Divisi, Asal)
                    VALUES
                  (:Nama, :Divisi, :Asal)";

        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('Divisi', $data['Divisi']);
        $this->db->bind('Asal', $data['Asal']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSantri($id){
        $query = "DELETE FROM Daftar_Santri WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSantri($data){
        $query = "UPDATE Daftar_Santri SET
                    Nama = :Nama,
                    Divisi = :Divisi,
                    Asal = :Asal
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('Divisi', $data['Divisi']);
        $this->db->bind('Asal', $data['Asal']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataSantri(){
        $keyword = $_POST['Cari'];
        $query = "SELECT * FROM Daftar_Santri WHERE Nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}

?>