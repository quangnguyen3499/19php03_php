<!-- 1. Khai báo một đối tượng User gồm các thuộc tính:

Tên, email, password, phone, address

Các phương thức:

Add, Edit, Register, Login, View, List -->

<?php
    class User
    {
        public $username;
        public $email;
        public $password;
        public $phone;
        public $address;

        private function add(){
            echo "Add user";
        }
        public function edit(){
            echo "Edit user";
        }
        public function register(){
            echo "Register form";
        }
        public function login(){
            echo "Please login";
        }
        public function view(){
            echo "View detail";
        }
        private function list(){
            echo "List user";
        }
    }
?>