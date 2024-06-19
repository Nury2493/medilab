<?php

namespace App\Models;

use Core\Model;
use PDO;

class Cita extends Model
{
    protected $table = "citas";

    public function all()
    {
        $stmt = $this->db->prepare("SELECT c.* , s.nombre as servicio , usu.nombre as cliente FROM $this->table c JOIN servicios s ON s.servicio_id = c.servicio_id JOIN usuarios usu ON usu.id = c.cliente_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function findByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT c.* , s.nombre as servicio FROM $this->table c JOIN servicios s ON s.servicio_id = c.servicio_id WHERE cliente_id = :cliente_id ");
        $stmt->bindParam(':cliente_id', $userId);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    public function findById($id)
    {
        $stmt = $this->db->prepare("SELECT c.* , s.nombre as servicio FROM $this->table c JOIN servicios s ON s.servicio_id = c.servicio_id WHERE cita_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO $this->table (cliente_id, servicio_id, fecha_hora, estado) VALUES (:cliente_id, :servicio_id, :fecha_hora, :estado)");
        $stmt->bindParam(':cliente_id', $data['cliente_id']);
        $stmt->bindParam(':servicio_id', $data['servicio_id']);
        $stmt->bindParam(':fecha_hora', $data['fecha_hora']);
        $stmt->bindParam(':estado', $data['estado']);
        $stmt->execute();
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE $this->table SET cliente_id = :cliente_id, servicio_id = :servicio_id, fecha_hora = :fecha_hora, estado = :estado WHERE cita_id = :id");
        $stmt->bindParam(':cliente_id', $data['cliente_id']);
        $stmt->bindParam(':servicio_id', $data['servicio_id']);
        $stmt->bindParam(':fecha_hora', $data['fecha_hora']);
        $stmt->bindParam(':estado', $data['estado']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE cita_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
