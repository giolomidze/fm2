<?php

class ProductController extends MainController
{
    public function products($get_product = false)
    {
        $data['products'] = $this->db->products();
        $data['page'] = 'products';
        $data['get_product'] = $get_product;
        if ($get_product) {
            $data['selected_product'] = $this->db->get_product();
        }
        $this->view->load('master', $data);
    }
}