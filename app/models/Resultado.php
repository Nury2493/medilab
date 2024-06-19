<?php

namespace App\Models;

use Core\Model;
use PDO;

class Resultado extends Model
{
    protected $table = "resultados";

    public function all()
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function findByIdCita($idCita)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE idCita = :idCita");
        $stmt->bindParam(':idCita', $idCita);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function findById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE idResultado = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO $this->table (url, nombreArchivo, idCita) VALUES (:url, :nombreArchivo ,  :idCita)");
        $stmt->bindParam(':url', $data['url']);
        $stmt->bindParam(':idCita', $data['idCita']);
        $stmt->bindParam(':nombreArchivo', $data['nombreArchivo']);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE idResultado = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
