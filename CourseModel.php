<?php

class CourseModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllCourses() {
        $query = "SELECT * FROM courses";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
