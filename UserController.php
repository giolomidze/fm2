<?php
class UserController extends MainController
{
    public function login()
    {
        $data['page'] = 'login_page';
        $this->view->load('master', $data);
    }
    public function sign_up()
    {
        $data['page'] = 'register';
        $this->view->load('master', $data);
    }
}