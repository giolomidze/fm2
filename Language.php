<?php

class Language
{
    private $lang;

    public function __construct($lang)
    {
        $this->lang = $lang;
    }

    public function translate($key)
    {
        $content = [
            'en' => [
                'firstname' => 'Firstname',
                'email' => 'Email',
                'password' => 'Password',
                'login_form' => 'Login Form',
                'sign_up_form' => 'Sign Up Form',
                'products' => 'Products',
            ],
            'ka' => [
                'firstname' => 'სახელი',
                'email' => 'ელ.ფოსტა',
                'password' => 'პაროლი',
                'login_form' => 'სისტემაში შესვლა',
                'sign_up_form' => 'რეგისტრაცია',
                'products' => 'პროდუქტები',
            ],
        ];

        if (array_key_exists($this->lang, $content)) {
            if (array_key_exists($key, $content[$this->lang])) {
                return $content[$this->lang][$key];
            } else {
                return $key;
            }
        } else {
            return $key;
        }
    }

    public function translate_url($keyword)
    {
        $keyword = str_replace(' ', '_', strtolower($keyword));
        $content = [
            'ka' => [
                'products' => 'პროდუქტები',
                'login' => 'შესვლა',
                'sign_up' => 'რეგისტრაცია',
            ],
            'en' => [
                'პროდუქტები' => 'products',
                'შესვლა' => 'login',
                'რეგისტრაცია' => 'sign_up',
            ],
        ];

        if (array_key_exists($this->lang, $content)) {
            if (array_key_exists($keyword, $content[$this->lang])) {
                return $content[$this->lang][$keyword];
            } else {
                return $keyword;
            }
        } else {
            return $keyword;
        }
    }
}