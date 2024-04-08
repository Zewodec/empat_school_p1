<?php

class RequestWrapper {
    private $get;
    private $post;

    public function __construct($get, $post) {
        $this->get = $get;
        $this->post = $post;
    }

    public function get($key, $default = null) {
        return isset($this->get[$key]) ? $this->get[$key] : $default;
    }

    public function post($key, $default = null) {
        return isset($this->post[$key]) ? $this->post[$key] : $default;
    }
}

$request = new RequestWrapper($_GET, $_POST);

// Приклад використання:
$name = $request->get('name');
$email = $request->post('email');

echo "Name from GET: $name<br>";
echo "Email from POST: $email<br>";

