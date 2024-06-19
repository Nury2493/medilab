<?php

namespace App\Models;

use Core\Model;
use PDO;

class Servicio extends Model
{
    protected $table = "servicios";

    public function all()
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function countAll()
    {

        $sql = "SELECT COUNT(*) as total FROM servicios";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ)->total;
    }

    public function getServicios($limit, $offset)
    {

        $limit = max(1, intval($limit));
        $offset = max(0, intval($offset));

        $sql = "SELECT * FROM servicios LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function findServiceById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE servicio_id = :servicio_id");
        $stmt->bindParam(':servicio_id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO $this->table (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)");
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':descripcion', $data['descripcion']);
        $stmt->bindParam(':precio', $data['precio']);
        $stmt->execute();
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE $this->table SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE servicio_id = :servicio_id");
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':descripcion', $data['descripcion']);
        $stmt->bindParam(':precio', $data['precio']);
        $stmt->bindParam(':servicio_id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE servicio_id = :servicio_id");
        $stmt->bindParam(':servicio_id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function cantidadServicios()
    {
        $stmt = $this->db->prepare("select  s.nombre as servicio, COUNT(c.servicio_id) as cantidadCitas from citas c right join servicios s on c.servicio_id  = s.servicio_id group by s.nombre ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
