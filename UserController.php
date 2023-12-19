<?php

require_once 'models/UserModel.php';

class UserController {
    private $model;

    public function __construct($db) {
        $this->model = new UserModel($db);
    }

    public function getAllUsers() {
        $users = $this->model->getAllUsers();
        require_once 'views/User.php';
    }
}
