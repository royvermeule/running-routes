<?php
class Run
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMap()
    {
        $this->db->query("SELECT * FROM `running_maps`;");

        $result = $this->db->resultSet();
  
        return $result;
    }

    public function getSingleMap($id)
    {
        $this->db->query("SELECT * FROM running_maps WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);

        return $this->db->single($id);
  
        //return $result;
    }
} 