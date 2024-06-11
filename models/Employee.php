<?php
class Employee {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    
    public function create($name, $position, $salary, $email) {
        $stmt = $this->db->prepare("INSERT INTO employees (name, position, salary, email) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $position, $salary, $email]);
        return $this->db->lastInsertId();
    }

   
    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM employees");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

  
    public function update($id, $name, $position, $salary, $email) {
        $stmt = $this->db->prepare("UPDATE employees SET name = ?, position = ?, salary = ?, email = ? WHERE id = ?");
        return $stmt->execute([$name, $position, $salary, $email, $id]);
    }

   
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM employees WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>