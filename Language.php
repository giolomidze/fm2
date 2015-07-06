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
            ],
            'ka' => [
                'firstname' => 'სახელი',
                'email' => 'ელ.ფოსტა',
                'password' => 'პაროლი',
                'login_form' => 'სისტემაში შესვლა',
                'sign_up_form' => 'რეგისტრაცია',
            ],
        ];

        if(array_key_exists($this->lang, $content)) {
            if(array_key_exists($key, $content[$this->lang])) {
                    return $content[$this->lang][$key];
            }
        }
    }
}
