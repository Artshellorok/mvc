<?php
    class Home extends Controller 
    {
        public function index()
        {
            
        }
        public function name($name = '')
        {
            var_dump($this->request()->all());
        }
    }