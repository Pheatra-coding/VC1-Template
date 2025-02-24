<?php

class UserController extends BaseController {

    public function login() {
        $this->view('/users/login');
    }

    public function register() {
        $this->view('/users/register');
    }

    public function index() {
        $this->view('/users/user_list');
    }

}