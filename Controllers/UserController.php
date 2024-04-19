<?php
require_once 'Models/User.php';

class UserController {
    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        if (count($users) > 0) {
            return $users;
        } else {
            echo "Không có dữ liệu để hiển thị.";
            exit();
        }
    }
}
?>