<?php

class tampil_model
{

    private $table = 'Artikel';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllArtikel(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function pilihData($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahArtikel($data){
        $judul = $data['Judul'];

        $query = "INSERT INTO Artikel (Judul, Artikel) VALUES (:Judul, :Artikel)";
        
        $this->db->query($query);
        $this->db->bind('Judul', $data['Judul']);
        $this->db->bind('Artikel', $data['Artikel']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubah($data){
        $query = "UPDATE Artikel SET Judul=:Judul, Artikel=:Artikel WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('Judul', $data['judul']);
        $this->db->bind('Artikel', $data['artikel']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapus($data){
        $query = "DELETE FROM Artikel WHERE id=:id";
        
        $this->db->query($query);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function register($data){
        
        $username = $data['Username'];
        $Password1 = $data['Password1'];
        $Password2 = $data['Password2'];
    
        if ($Password1 === $Password2) {
            $password = password_hash($Password1, DEFAULT_HASH);
            $query = "INSERT INTO User(username, password) VALUES (:username, :password)";
            
            $this->db->query($query);
            $this->db->bind('username', $username);
            $this->db->bind('password', $password);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }

    public function login($data){
        $query = "SELECT * FROM User WHERE username= :username, password= :password";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>