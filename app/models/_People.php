<?php

class _People {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function title() {
        return "View1 title loaded from a model";
    }

    public function getAllPeople() {
        $this->db->query('SELECT * FROM tbl_people');
        return $this->db->resultSet();
    }
}

?>