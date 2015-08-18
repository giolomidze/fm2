<?php class TestController extends MainController
{
    public function test()
    {
        $data['page'] = 'test_page';
        $this->view->load('master', $data);
    }
    public function update()
    {
        echo 'updated';
    }
}