<?php

require_once 'models/CourseModel.php';

class CourseController {
    private $model;

    public function __construct($db) {
        $this->model = new CourseModel($db);
    }

    public function getAllCourses() {
        $courses = $this->model->getAllCourses();
        require_once 'views/Course.php';
    }
}
