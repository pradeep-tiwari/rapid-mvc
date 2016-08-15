<?php

class Home extends Controller {
    public function index() {
        $this->data['name'] = 'jayco';
        $this->data['email'] = 'bdhd@jdjd';
        $this->view = ['login/header', 'login/login', 'login/footer'];
        $this->display();
    }
    public function reset_pwd() {
        $this->view = ['reset'];
        $this->display();
    }
}