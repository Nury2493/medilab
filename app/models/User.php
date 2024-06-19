<?php

namespace App\Models;

use Core\Model;
use PDO;

class User extends Model
{

    protected $table = "usuarios";

    public function all()
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findUsuarioById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function findUsersByRol($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE rol_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $user;
    }

    public function findUsuarioByEmail($data)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE email = :email");
        $stmt->bindParam(':email', $data['email']);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function create($data)
    {

        $passwordHash = password_hash($data['password'], PASSWORD_DEFAULT);


        $stmt = $this->db->prepare("INSERT INTO $this->table 
    (nombre, email, password, rol_id, FechaNacimiento, Direccion, Telefono, dui, CondicionesMedicas) 
    VALUES (:name, :email, :password, :rol_id, :FechaNacimiento, :Direccion, :Telefono, :dui, :CondicionesMedicas)");

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $passwordHash);
        $stmt->bindParam(':rol_id', $data['rol_id']);
        $stmt->bindParam(':FechaNacimiento', $data['FechaNacimiento']);
        $stmt->bindParam(':Direccion', $data['Direccion']);
        $stmt->bindParam(':Telefono', $data['Telefono']);
        $stmt->bindParam(':dui', $data['dui']);
        $stmt->bindParam(':CondicionesMedicas', $data['CondicionesMedicas']);
        $stmt->execute();
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
