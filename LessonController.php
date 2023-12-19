<?php

require_once 'models/LessonModel.php';

class LessonController {
    private $model;

    public function __construct($db) {
        $this->model = new LessonModel($db);
    }

    public function getLessonsByCourseId($courseId) {
        $lessons = $this->model->getLessonsByCourseId($courseId);
        require_once 'views/Lesson.php';
    }
}
