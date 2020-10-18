<?php

class App {
    protected $Controller = 'Home';
    protected $Method = 'index';
    protected $Params = [];

    public function __construct(){
        $url = $this->parseURL();
        
        // ControllerURL
        if ($url == NULL){
            $url = [$this->Controller];
        }
        if (file_exists('../app/Controllers/' . $url[0] . '.php')) {
            $this->Controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/Controllers/'.$this->Controller.'.php';
        $this->Controller = new $this->Controller;
    
        // MethodURL
        if (isset($url[1])) {
            if (method_exists($this->Controller, $url[1])) {
                $this->Method = $url[1];
                unset($url[1]);
            }
        }

        // Params
        if (!empty($url)) {
            $this->Params = array_values($url);
        }

        // Run

        call_user_func_array([$this->Controller, $this->Method], $this->Params);
    }

    public function parseURL(){
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

?>