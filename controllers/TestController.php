<?php
class TestController extends Controller
{
    public function test()
    {
        Session::set('logged_in', true);
        $data['page'] = 'test_page';
        $this->view->load('master', $data);
    }
    public function update()
    {
        echo 'updated';
    }
    public function logout()
    {
        Session::logout();
    }
}