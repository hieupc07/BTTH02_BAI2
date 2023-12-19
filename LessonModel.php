<?php

class LessonModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getLessonsByCourseId($courseId) {
        $query = "SELECT * FROM lessons WHERE course_id = $courseId";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
