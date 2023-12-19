<?php

require_once 'config/config.php'; // Thông tin cấu hình kết nối database
require_once 'controllers/UserController.php';
require_once 'controllers/CourseController.php';
require_once 'controllers/LessonController.php';

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Example: Get all users
$userController = new UserController($db);
$userController->getAllUsers();

// Example: Get all courses
$courseController = new CourseController($db);
$courseController->getAllCourses();

// Example: Get lessons by course ID
$lessonController = new LessonController($db);
$lessonController->getLessonsByCourseId(1);

$db->close();
